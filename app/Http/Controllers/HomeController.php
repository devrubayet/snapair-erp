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

    public function about(){
        return view('pages.about');
    }

    public function services()
    {
        // উদাহরণ হিসেবে স্ট্যাটিক ডাটা দেওয়া হয়েছে, আপনি চাইলে ডাটাবেজ থেকেও সার্ভিস আনতে পারেন
        $services = [
            [
                'id' => 1,
                'title' => 'Flight Booking',
                'description' => 'Fast, easy, and reliable domestic and international flight booking services at competitive rates.',
                'icon' => 'M12 19l9 2-9-18-9 18 9-2zm0 0v-8'
            ],
            [
                'id' => 2,
                'title' => 'Tour Packages',
                'description' => 'Customized travel and vacation packages tailored to fit your preferences and budget.',
                'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h1.5a2.5 2.5 0 002.5-2.5V8.065'
            ],
            [
                'id' => 3,
                'title' => 'Visa Assistance',
                'description' => 'Hassle-free visa application processing and expert guidance for smooth documentation.',
                'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'
            ],
            [
                'id' => 4,
                'title' => 'Hotel Reservation',
                'description' => 'Book world-class luxury hotels and cozy accommodations worldwide with exclusive discounts.',
                'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'
            ],
            [
                'id' => 5,
                'title' => 'Airport Transfer',
                'description' => 'Punctual and comfortable pick-up and drop-off services for all major international airports.',
                'icon' => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4'
            ],
            [
                'id' => 6,
                'title' => 'Travel Insurance',
                'description' => 'Comprehensive medical and travel protection plans for peace of mind during your journeys.',
                'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
            ]
        ];

        return view('pages.services', compact('services'));
    }

    public function prices(){
        return view('pages.pricing');
    }

    public function contact(){
        return view('pages.contact');
    }
}
