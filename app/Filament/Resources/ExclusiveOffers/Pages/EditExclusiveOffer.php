<?php

namespace App\Filament\Resources\ExclusiveOffers\Pages;

use App\Filament\Resources\ExclusiveOffers\ExclusiveOfferResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditExclusiveOffer extends EditRecord
{
    protected static string $resource = ExclusiveOfferResource::class;

    protected function mutateFormDataBeforeUpdate(array $data): array
    {
        $data['short_desc'] = !empty($data['description'])
            ? Str::limit(strip_tags($data['description']), 150)
            : null;

        return $data;
    }
}