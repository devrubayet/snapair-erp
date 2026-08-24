<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
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

    // মোট পারচেজ বা ভেন্ডর চার্জ
    public function getTotalCostAttribute(): float
    {
        return (float) $this->bookings()->sum('cost_price');
    }

    // ভেন্ডরকে মোট দেওয়া পেমেন্ট
    public function getTotalPaidAttribute(): float
    {
        return (float) $this->transactions()->where('type', 'vendor_payment')->sum('amount');
    }

    // ভেন্ডরের মোট পাওনা/ডিউ
    public function getDueAmountAttribute(): float
    {
        return ($this->opening_balance + $this->total_cost) - $this->total_paid;
    }
}