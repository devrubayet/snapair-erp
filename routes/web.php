<?php

use App\Http\Controllers\AirlinesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MoneyReceiptController;
use App\Http\Controllers\StatementController;

use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function () {
    Route::get('/clients/{client}/statement-pdf', [StatementController::class, 'clientStatement'])->name('client.statement.pdf');
    Route::get('/vendors/{vendor}/statement-pdf', [StatementController::class, 'vendorStatement'])->name('vendor.statement.pdf');
    Route::get('/bookings/{booking}/invoice', [InvoiceController::class, 'download'])
    ->name('bookings.invoice');
    Route::get('/transactions/{transaction}/receipt', [MoneyReceiptController::class, 'download'])
    ->name('transactions.receipt');
});



