<?php

namespace App\Filament\Resources\Vendors;

use App\Filament\Resources\Vendors\Pages;
use App\Models\Vendor;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables;
use Filament\Tables\Table;

class VendorResource extends Resource
{
    protected static ?string $model = Vendor::class;

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingStorefront;

    protected static ?string $recordTitleAttribute = 'company_name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('company_name')
                    ->label('Company / Agency Name')
                    ->required(),

                Forms\Components\TextInput::make('contact_person')
                    ->label('Contact Person'),

                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required(),

                Forms\Components\TextInput::make('email')
                    ->email(),

                Forms\Components\TextInput::make('opening_balance')
                    ->numeric()
                    ->default(0.00),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')->searchable(),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('total_cost')
                    ->label('Total Bill')
                    ->money('BDT'),
                Tables\Columns\TextColumn::make('total_paid')
                    ->label('Total Paid')
                    ->money('BDT'),
                Tables\Columns\TextColumn::make('due_amount')
                    ->label('Payable Due')
                    ->money('BDT')
                    ->badge()
                    ->color(fn ($state) => $state > 0 ? 'warning' : 'success'),
            ])
            ->actions([
                EditAction::make(),
                Action::make('downloadStatement')
                    ->label('PDF Statement')
                    ->icon('heroicon-o-document-arrow-down')
                    ->color('success')
                    ->form([
                        Forms\Components\DatePicker::make('start_date')
                            ->label('Start Date')
                            ->default(now()->startOfMonth())
                            ->required(),
                        Forms\Components\DatePicker::make('end_date')
                            ->label('End Date')
                            ->default(now())
                            ->required(),
                    ])
                    ->action(function (array $data, Vendor $record) {
                        return redirect()->route('vendor.statement.pdf', [
                            'vendor' => $record->id,
                            'start_date' => $data['start_date'],
                            'end_date' => $data['end_date'],
                        ]);
                    }),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVendors::route('/'),
            'create' => Pages\CreateVendor::route('/create'),
            'edit' => Pages\EditVendor::route('/{record}/edit'),
        ];
    }
}