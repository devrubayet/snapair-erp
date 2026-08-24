<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf;

class MoneyReceiptController extends Controller
{
    public function download(Transaction $transaction)
    {
        $transaction->load(['booking', 'client']);
        
        $pdf = Pdf::loadView('pdf.money-receipt', compact('transaction'));

        return $pdf->download("Money-Receipt-{$transaction->transaction_number}.pdf");
    }
}