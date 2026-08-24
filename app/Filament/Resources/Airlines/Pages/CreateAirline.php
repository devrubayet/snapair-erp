<?php

namespace App\Filament\Resources\Airlines\Pages;

use App\Filament\Resources\Airlines\AirlineResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAirline extends CreateRecord
{
    protected static string $resource = AirlineResource::class;

    // এই ফাংশনটি যুক্ত করলে ক্রিয়েট হওয়ার পর সরাসরি ইনডেক্স/লিস্ট পেজে রিডাইরেক্ট হবে
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
