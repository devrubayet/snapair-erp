<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles; // এটি ইমপোর্ট করুন
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable, HasRoles; // এখানে HasRoles যোগ করুন

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // অ্যাডমিন প্যানেলে কে প্রবেশ করতে পারবে তার লজিক
    public function canAccessPanel(Panel $panel): bool
    {
        // সুপার অ্যাডমিন সহ অন্যান্য রোলগুলো এখানে যুক্ত করে দিন
        return $this->hasAnyRole(['super_admin', 'admin', 'employee', 'client']);
    }
    protected static function booted(): void
    {
        static::created(function (User $user) {
            // নতুন অ্যাকাউন্ট খুললেই তাকে স্বয়ংক্রিয়ভাবে 'client' রোল দিয়ে দেওয়া
            if (!$user->hasAnyRole(['super_admin', 'admin', 'employee', 'client'])) {
                $user->assignRole('client');
            }
        });
    }
}
