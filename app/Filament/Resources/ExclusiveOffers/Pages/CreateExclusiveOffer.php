<?php

namespace App\Filament\Resources\ExclusiveOffers\Pages;

use App\Filament\Resources\ExclusiveOffers\ExclusiveOfferResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateExclusiveOffer extends CreateRecord
{
    protected static string $resource = ExclusiveOfferResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // আপনার কন্ট্রোলারের লজিক এখানে কাজ করবে
        $data['short_desc'] = !empty($data['description'])
            ? Str::limit(strip_tags($data['description']), 150)
            : null;

        return $data;
    }
}