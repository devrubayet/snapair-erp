<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    // মোট সেলস
    public function getTotalSalesAttribute(): float
    {
        return (float) $this->bookings()->sum('selling_price');
    }

    // মোট জমা
    public function getTotalPaidAttribute(): float
    {
        return (float) $this->transactions()->where('type', 'client_payment')->sum('amount');
    }

    // মোট বাকি/ডিউ
    public function getDueAmountAttribute(): float
    {
        return $this->total_sales - $this->total_paid;
    }
}