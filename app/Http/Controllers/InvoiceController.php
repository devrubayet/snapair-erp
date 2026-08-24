<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function download(Booking $booking)
    {
        $booking->load(['client', 'vendor', 'transactions']);

        $totalPaid = $booking->transactions
            ->where('type', 'client_payment')
            ->sum('amount');

        $due = max(0, $booking->selling_price - $totalPaid);

        $pdf = Pdf::loadView('pdf.invoice', compact('booking', 'totalPaid', 'due'));

        return $pdf->download("Invoice-{$booking->booking_reference}.pdf");
    }
}