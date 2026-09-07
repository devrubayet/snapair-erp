<?php

namespace App\Http\Controllers;

use App\Models\XclusiveFare;
use Illuminate\Http\Request;

class XclusiveFareController extends Controller
{
    /**
     * Display a listing of active exclusive fares with airline details.
     */
    public function index()
    {
        // Eager load 'airline' relationship to avoid N+1 query issue
        $xclusiveFares = XclusiveFare::with('airline')
            ->where('is_active', true)
            ->where('departure_date', '>=', now()->toDateString())
            ->orderBy('departure_date', 'asc')
            ->get();

        return view('xclusive-fares.index', compact('xclusiveFares'));
    }

    /**
     * Store a newly created fare (if created via custom request/API).
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'airline_id'       => 'required|exists:airlines,id',
            'available_seats'  => 'required|integer|min:0',
            'origin_code'      => 'required|string|max:10',
            'departure_time'   => 'required',
            'departure_date'   => 'required|date',
            'destination_code' => 'required|string|max:10',
            'arrival_time'     => 'required',
            'arrival_date'     => 'required|date',
            'duration'         => 'nullable|string|max:50',
            'stops'            => 'required|integer|min:0',
            'price'            => 'required|numeric|min:0',
            'currency'         => 'required|string|max:10',
            'booking_url'      => 'nullable|url',
        ]);

        XclusiveFare::create($validated);

        return redirect()->back()->with('success', 'Xclusive Fare created successfully!');
    }

    public function getFares()
{
    $fares = XclusiveFare::with('airline')
        ->where('is_active', true)
        ->where('departure_date', '>=', now()->toDateString())
        ->orderBy('departure_date', 'asc')
        ->get();

    return response()->json($fares);
}
}