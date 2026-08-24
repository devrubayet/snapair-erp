<?php

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

Route::get('/track-booking', [HomeController::class, 'trackBooking']);