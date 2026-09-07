<?php

namespace App\Filament\Resources\XclusiveFares\Pages;

use App\Filament\Resources\XclusiveFares\XclusiveFareResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditXclusiveFare extends EditRecord
{
    protected static string $resource = XclusiveFareResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
