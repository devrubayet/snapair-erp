<?php

namespace App\Filament\Resources\XclusiveFares\Pages;

use App\Filament\Resources\XclusiveFares\XclusiveFareResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListXclusiveFares extends ListRecords
{
    protected static string $resource = XclusiveFareResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
