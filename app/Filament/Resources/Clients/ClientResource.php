<?php

namespace App\Filament\Resources\Clients;

use App\Filament\Resources\Clients\Pages;
use App\Models\Client;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables;
use Filament\Tables\Table;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedUsers;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('name')
                    ->label('Client Name')
                    ->required(),

                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required(),

                Forms\Components\TextInput::make('email')
                    ->email(),

                Forms\Components\TextInput::make('passport_number')
                    ->label('Passport Number'),

                Forms\Components\DatePicker::make('passport_expiry_date')
                    ->label('Passport Expiry Date'),

                Forms\Components\Select::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->default('active')
                    ->required(),

                Forms\Components\Textarea::make('address')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('phone')->searchable(),
                Tables\Columns\TextColumn::make('total_sales')
                    ->label('Total Sales')
                    ->money('BDT'),
                Tables\Columns\TextColumn::make('total_paid')
                    ->label('Total Paid')
                    ->money('BDT'),
                Tables\Columns\TextColumn::make('due_amount')
                    ->label('Due Amount')
                    ->money('BDT')
                    ->badge()
                    ->color(fn ($state) => $state > 0 ? 'danger' : 'success'),
                Tables\Columns\TextColumn::make('status')->badge(),
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
                    ->action(function (array $data, Client $record) {
                        return redirect()->route('client.statement.pdf', [
                            'client' => $record->id,
                            'start_date' => $data['start_date'],
                            'end_date' => $data['end_date'],
                        ]);
                    }),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}