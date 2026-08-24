<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $fillable = [
        'name',
        'image', // এখানে 'img' এর বদলে 'image' হবে (ডাটাবেজের কলামের নামের সাথে হুবহু মিল থাকতে হবে)
        'details',
    ]; 

    public function getImageUrlAttribute()
    {
        return $this->image
            ? asset('storage/' . $this->image)
            : asset('airlines/avatar.png'); // fallback
    }
}