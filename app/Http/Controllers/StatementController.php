<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Vendor;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StatementController extends Controller
{
    public function clientStatement(Request $request, Client $client)
    {
        $startDate = $request->query('start_date') ? Carbon::parse($request->query('start_date'))->startOfDay() : null;
        $endDate = $request->query('end_date') ? Carbon::parse($request->query('end_date'))->endOfDay() : null;

        $records = collect();

        // বুকিং ডেটা ফিল্টার (Date Range)
        $bookingsQuery = $client->bookings();
        if ($startDate && $endDate) {
            $bookingsQuery->whereBetween('created_at', [$startDate, $endDate]);
        }
        $bookings = $bookingsQuery->get();

        foreach ($bookings as $booking) {
            $records->push([
                'date' => $booking->created_at,
                'ref' => $booking->booking_reference,
                'note' => 'Service: ' . strtoupper($booking->service_type),
                'debit' => $booking->selling_price,
                'credit' => 0,
            ]);
        }

        // ট্রানজেকশন ডেটা ফিল্টার (Date Range)
        $txnsQuery = $client->transactions()->where('type', 'client_payment');
        if ($startDate && $endDate) {
            $txnsQuery->whereBetween('transaction_date', [$startDate, $endDate]);
        }
        $transactions = $txnsQuery->get();

        foreach ($transactions as $txn) {
            $records->push([
                'date' => $txn->transaction_date,
                'ref' => $txn->transaction_number,
                'note' => 'Payment Method: ' . strtoupper($txn->payment_method),
                'debit' => 0,
                'credit' => $txn->amount,
            ]);
        }

        $records = $records->sortBy('date');

        // সিলেক্টেড ডেট রেঞ্জের সাপেক্ষে টোটাল হিসাব
        $totalBilled = $bookings->sum('selling_price');
        $totalPaid = $transactions->sum('amount');
        $dueAmount = $totalBilled - $totalPaid;

        $pdf = Pdf::loadView('pdf.statement', [
            'title' => 'Client Ledger Statement',
            'entity' => $client,
            'records' => $records,
            'start_date' => $request->query('start_date'),
            'end_date' => $request->query('end_date'),
            'total_billed' => $totalBilled,
            'total_paid' => $totalPaid,
            'due_amount' => $dueAmount,
        ]);

        return $pdf->download("Statement-Client-{$client->id}.pdf");
    }

    public function vendorStatement(Request $request, Vendor $vendor)
    {
        $startDate = $request->query('start_date') ? Carbon::parse($request->query('start_date'))->startOfDay() : null;
        $endDate = $request->query('end_date') ? Carbon::parse($request->query('end_date'))->endOfDay() : null;

        $records = collect();

        // ওপেনিং ব্যালেন্স চেকিং (যদি সিলেক্টেড স্টার্ট ডেটের আগের হয়)
        $includeOpening = true;
        if ($startDate && $vendor->created_at && $vendor->created_at->lt($startDate)) {
            $includeOpening = false;
        }

        if ($vendor->opening_balance > 0 && $includeOpening) {
            $records->push([
                'date' => $vendor->created_at,
                'ref' => 'OPENING',
                'note' => 'Opening Balance',
                'debit' => $vendor->opening_balance,
                'credit' => 0,
            ]);
        }

        // ভেন্ডর বুকিং ডেটা ফিল্টার
        $bookingsQuery = $vendor->bookings();
        if ($startDate && $endDate) {
            $bookingsQuery->whereBetween('created_at', [$startDate, $endDate]);
        }
        $bookings = $bookingsQuery->get();

        foreach ($bookings as $booking) {
            $records->push([
                'date' => $booking->created_at,
                'ref' => $booking->booking_reference,
                'note' => 'Vendor Charge: ' . strtoupper($booking->service_type),
                'debit' => $booking->cost_price,
                'credit' => 0,
            ]);
        }

        // ভেন্ডর ট্রানজেকশন ডেটা ফিল্টার
        $txnsQuery = $vendor->transactions()->where('type', 'vendor_payment');
        if ($startDate && $endDate) {
            $txnsQuery->whereBetween('transaction_date', [$startDate, $endDate]);
        }
        $transactions = $txnsQuery->get();

        foreach ($transactions as $txn) {
            $records->push([
                'date' => $txn->transaction_date,
                'ref' => $txn->transaction_number,
                'note' => 'Payment Method: ' . strtoupper($txn->payment_method),
                'debit' => 0,
                'credit' => $txn->amount,
            ]);
        }

        $records = $records->sortBy('date');

        $openingAmt = ($vendor->opening_balance > 0 && $includeOpening) ? $vendor->opening_balance : 0;
        $totalBilled = $openingAmt + $bookings->sum('cost_price');
        $totalPaid = $transactions->sum('amount');
        $dueAmount = $totalBilled - $totalPaid;

        $pdf = Pdf::loadView('pdf.statement', [
            'title' => 'Vendor Ledger Statement',
            'entity' => $vendor,
            'records' => $records,
            'start_date' => $request->query('start_date'),
            'end_date' => $request->query('end_date'),
            'total_billed' => $totalBilled,
            'total_paid' => $totalPaid,
            'due_amount' => $dueAmount,
        ]);

        return $pdf->download("Statement-Vendor-{$vendor->id}.pdf");
    }
}