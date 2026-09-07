<?php

namespace App\Filament\Resources\XclusiveFares;

use App\Filament\Resources\XclusiveFares\Pages\CreateXclusiveFare;
use App\Filament\Resources\XclusiveFares\Pages\EditXclusiveFare;
use App\Filament\Resources\XclusiveFares\Pages\ListXclusiveFares;
use App\Filament\Resources\XclusiveFares\XclusiveFareResource\Pages;
use App\Models\XclusiveFare;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class XclusiveFareResource extends Resource
{
    protected static ?string $model = XclusiveFare::class;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-paper-airplane';

    protected static ?string $navigationLabel = 'Xclusive Fares';

    /**
     * Filament v4 Schema structure
     */
    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Airline Details')
                    ->description('Select airline from database and seat availability.')
                    ->schema([
                        // Select dropdown connected to 'airlines' table
                        Select::make('airline_id')
                            ->label('Airline')
                            ->relationship('airline', 'name') // Note: Change 'name' if your column is named 'title' or 'airline_name'
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('available_seats')
                            ->label('Seats Left')
                            ->required()
                            ->numeric()
                            ->default(0)
                            ->minValue(0),
                    ])
                    ->columns(2),

                Section::make('Flight Route & Schedule')
                    ->description('Flight dates, times, and airport codes.')
                    ->schema([
                        TextInput::make('origin_code')
                            ->label('Departure Airport (Code)')
                            ->required()
                            ->placeholder('e.g. DAC')
                            ->maxLength(10),

                        TimePicker::make('departure_time')
                            ->required(),

                        DatePicker::make('departure_date')
                            ->required(),

                        TextInput::make('destination_code')
                            ->label('Arrival Airport (Code)')
                            ->required()
                            ->placeholder('e.g. MED')
                            ->maxLength(10),

                        TimePicker::make('arrival_time')
                            ->required(),

                        DatePicker::make('arrival_date')
                            ->required(),

                        TextInput::make('duration')
                            ->placeholder('e.g. 10h 45m')
                            ->maxLength(50),

                        TextInput::make('stops')
                            ->required()
                            ->numeric()
                            ->default(0),
                    ])
                    ->columns(3),

                Section::make('Pricing & Availability')
                    ->schema([
                        TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('BDT'),

                        TextInput::make('currency')
                            ->required()
                            ->default('BDT')
                            ->maxLength(10),

                        TextInput::make('booking_url')
                            ->url()
                            ->placeholder('https://...'),

                        Toggle::make('is_active')
                            ->label('Active on Front-end')
                            ->required()
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Fetch logo directly from related airline model
                ImageColumn::make('airline.logo')
                    ->label('Logo')
                    ->circular(),

                // Fetch name from related airline model
                TextColumn::make('airline.name')
                    ->label('Airline')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('available_seats')
                    ->label('Seats Left')
                    ->badge()
                    ->color(fn (int $state): string => $state < 5 ? 'danger' : 'warning')
                    ->sortable(),

                TextColumn::make('origin_code')
                    ->label('From')
                    ->badge(),

                TextColumn::make('destination_code')
                    ->label('To')
                    ->badge(),

                TextColumn::make('departure_date')
                    ->date('d M, Y')
                    ->sortable(),

                TextColumn::make('price')
                    ->money('BDT')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListXclusiveFares::route('/'),
            'create' => CreateXclusiveFare::route('/create'),
            'edit'   => EditXclusiveFare::route('/{record}/edit'),
        ];
    }
}