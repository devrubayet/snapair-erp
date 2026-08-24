<?php

namespace App\Filament\Resources\Bookings;

use App\Filament\Resources\Bookings\Pages;
use App\Models\Booking;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'booking_reference';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('booking_reference')
                    ->default('TRV-' . strtoupper(uniqid()))
                    ->required()
                    ->readOnly(),

                Forms\Components\Select::make('client_id')
                    ->relationship('client', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\Select::make('vendor_id')
                    ->relationship('vendor', 'company_name')
                    ->searchable()
                    ->preload()
                    ->nullable(),

                Forms\Components\Select::make('service_type')
                    ->options([
                        'visa' => 'Visa Processing',
                        'ticket' => 'Air Ticket',
                        'hotel' => 'Hotel Booking',
                        'document' => 'Document Processing',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('cost_price')
                    ->label('Cost Price (Vendor)')
                    ->numeric()
                    ->default(0.00)
                    ->required(),

                Forms\Components\TextInput::make('selling_price')
                    ->label('Selling Price (Client)')
                    ->numeric()
                    ->default(0.00)
                    ->required(),

                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'processing' => 'Processing',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->default('pending')
                    ->required(),

                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('booking_reference')->searchable(),
                Tables\Columns\TextColumn::make('client.name')->label('Client')->searchable(),
                Tables\Columns\TextColumn::make('service_type')->badge()->sortable(),
                Tables\Columns\TextColumn::make('cost_price')->money('BDT'),
                Tables\Columns\TextColumn::make('selling_price')->money('BDT'),
                Tables\Columns\TextColumn::make('status')->badge(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('service_type')
                    ->options([
                        'visa' => 'Visa',
                        'ticket' => 'Ticket',
                        'hotel' => 'Hotel',
                        'document' => 'Document',
                    ]),
            ])
            ->actions([
                // Invoice বাটন যুক্ত করা হলো
                Action::make('downloadInvoice')
                    ->label('Invoice')
                    ->icon('heroicon-o-document-arrow-down')
                    ->color('success')
                    ->url(fn (Booking $record) => route('bookings.invoice', $record))
                    ->openUrlInNewTab(),
                
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}