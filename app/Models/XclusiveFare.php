<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class XclusiveFare extends Model
{
    use HasFactory;

    protected $fillable = [
        'airline_id', // airline_name & airline_logo-এর বদলে Foreign Key
        'available_seats',
        'origin_code',
        'departure_time',
        'departure_date',
        'destination_code',
        'arrival_time',
        'arrival_date',
        'duration',
        'stops',
        'price',
        'currency',
        'booking_url',
        'is_active',
    ];

    protected $casts = [
        'departure_date' => 'date',
        'arrival_date' => 'date',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
    ];

    /**
     * Get the airline that owns the exclusive fare.
     */
    public function airline(): BelongsTo
    {
        return $this->belongsTo(Airline::class);
    }
}