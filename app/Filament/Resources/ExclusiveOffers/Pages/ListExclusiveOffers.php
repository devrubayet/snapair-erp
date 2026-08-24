<?php

namespace App\Filament\Resources\ExclusiveOffers\Pages;

use App\Filament\Resources\ExclusiveOffers\ExclusiveOfferResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListExclusiveOffers extends ListRecords
{
    protected static string $resource = ExclusiveOfferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
