<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\XclusiveFareController;
use Illuminate\Support\Facades\Route;

Route::get('/track-booking', [HomeController::class, 'trackBooking']);
Route::get('/xclusive-fares',[XclusiveFareController::class,'getFares'])->name('xclusive.fares');