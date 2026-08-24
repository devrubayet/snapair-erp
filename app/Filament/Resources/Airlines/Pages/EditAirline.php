<?php

namespace App\Filament\Resources\Airlines\Pages;

use App\Filament\Resources\Airlines\AirlineResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAirline extends EditRecord
{
    protected static string $resource = AirlineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    // এই ফাংশনটি যুক্ত করলে ক্রিয়েট হওয়ার পর সরাসরি ইনডেক্স/লিস্ট পেজে রিডাইরেক্ট হবে
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
