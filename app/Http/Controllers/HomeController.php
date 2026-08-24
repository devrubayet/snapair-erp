<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Booking;
use App\Models\ExclusiveOffer;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request)
    {
        $offers = ExclusiveOffer::where('status', 'active')->latest()->get();
        $airlines = Airline::all();
        $testimonials = Testimonial::all();
        return view('welcome', compact('offers', 'airlines', 'testimonials'));
    }

   
}
