<?php

namespace App\Filament\Resources\XclusiveFares\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class XclusiveFareForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('airline_id')
                    ->relationship('airline', 'name')
                    ->required(),
                TextInput::make('available_seats')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('origin_code')
                    ->required(),
                TimePicker::make('departure_time')
                    ->required(),
                DatePicker::make('departure_date')
                    ->required(),
                TextInput::make('destination_code')
                    ->required(),
                TimePicker::make('arrival_time')
                    ->required(),
                DatePicker::make('arrival_date')
                    ->required(),
                TextInput::make('duration'),
                TextInput::make('stops')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('currency')
                    ->required()
                    ->default('BDT'),
                TextInput::make('booking_url')
                    ->url(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
