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

   public function trackBooking(Request $request)
    {
        $referenceNumber = $request->query('reference_number');

        if (!$referenceNumber) {
            return response()->json([
                'success' => false,
                'message' => 'Reference number is required.'
            ], 400);
        }

        // ক্লায়েন্ট রিলেশনসহ বুকিং কুয়েরি করা (with('client') যদি থাকে)
        $booking = Booking::with('client')
                    ->where('booking_reference', $referenceNumber)
                    ->first();

        if ($booking) {
            return response()->json([
                'success' => true,
                'booking' => $booking
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'No booking found with this reference number.'
        ], 404);
    }
}
