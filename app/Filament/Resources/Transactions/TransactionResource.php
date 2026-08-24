<?php

namespace App\Filament\Resources\Transactions;

use App\Filament\Resources\Transactions\Pages;
use App\Models\Booking;
use App\Models\Transaction;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-arrows-right-left';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                // অটো-জেনারেটেড ট্রানজেকশন আইডি দেখানোর জন্য (Read-Only)
                Forms\Components\TextInput::make('transaction_number')
                    ->label('Transaction Reference')
                    ->default(fn($record) => $record?->transaction_number ?? 'Auto-generated on save')
                    ->disabled()
                    ->dehydrated(false),

                // ১. বুকিং সিলেক্ট (নাম, সার্ভিস ও বাকি পাওনা সহ)
                Forms\Components\Select::make('booking_id')
                    ->label('Select Booking')
                    ->options(function () {
                        return Booking::with(['client', 'vendor', 'transactions'])
                            ->get()
                            ->mapWithKeys(function ($booking) {
                                $clientName = $booking->client?->name ?? 'No Client';
                                $service = $booking->service_type ?? 'Service';

                                $paid = $booking->transactions->where('type', 'client_payment')->sum('amount');
                                $due = $booking->selling_price - $paid;

                                $dueText = $due > 0 ? "Due: " . number_format($due, 2) . " BDT" : "PAID";

                                return [
                                    $booking->id => "{$booking->booking_reference} — {$clientName} ({$service}) [{$dueText}]"
                                ];
                            });
                    })
                    ->searchable()
                    ->live()
                    ->afterStateUpdated(function ($state, Set $set) {
                        if ($booking = Booking::with(['client', 'vendor', 'transactions'])->find($state)) {
                            $set('client_id', $booking->client_id);
                            $set('vendor_id', $booking->vendor?->id);

                            $paid = $booking->transactions->where('type', 'client_payment')->sum('amount');
                            $due = max(0, $booking->selling_price - $paid);
                            $set('amount', $due);
                        } else {
                            $set('client_id', null);
                            $set('vendor_id', null);
                            $set('amount', null);
                        }
                    }),

                // ২. ক্লায়েন্ট সিলেক্ট
                Forms\Components\Select::make('client_id')
                    ->relationship('client', 'name')
                    ->label('Client')
                    ->searchable()
                    ->required()
                    ->disabled(fn(Get $get) => filled($get('booking_id')))
                    ->dehydrated(),

                // ৩. ভেন্ডর সিলেক্ট
                Forms\Components\Select::make('vendor_id')
                    ->relationship('vendor', 'company_name')
                    ->label('Vendor')
                    ->searchable()
                    ->disabled(fn(Get $get) => filled($get('booking_id')))
                    ->dehydrated(),

                // ৪. পেমেন্ট টাইপ
                Forms\Components\Select::make('type')
                    ->options([
                        'client_payment' => 'Client Payment (Receivable)',
                        'vendor_payment' => 'Vendor Payment (Payable)',
                    ])
                    ->required(),

                // ৫. অ্যামাউন্ট ফিল্ড
                Forms\Components\TextInput::make('amount')
                    ->numeric()
                    ->prefix('BDT')
                    ->required()
                    ->helperText(function (Get $get) {
                        if ($bookingId = $get('booking_id')) {
                            $booking = Booking::with('transactions')->find($bookingId);
                            if ($booking) {
                                $paid = $booking->transactions->where('type', 'client_payment')->sum('amount');
                                $due = $booking->selling_price - $paid;
                                return "বর্তমান বাকি (Due): " . number_format($due, 2) . " BDT";
                            }
                        }
                        return null;
                    })
                    ->rule(function (Get $get) {
                        return function (string $attribute, $value, \Closure $fail) use ($get) {
                            if ($get('type') === 'client_payment' && $bookingId = $get('booking_id')) {
                                $booking = Booking::with('transactions')->find($bookingId);
                                if ($booking) {
                                    $paid = $booking->transactions->where('type', 'client_payment')->sum('amount');
                                    $due = $booking->selling_price - $paid;

                                    if ($due <= 0) {
                                        $fail('এই বুকিংয়ের সকল পাওনা পরিশোধিত (Fully Paid)। নতুন করে পেমেন্ট নেওয়া যাবে না।');
                                    } elseif ($value > $due) {
                                        $fail('ইনপুট দেওয়া টাকা বর্তমান বাকি (' . number_format($due, 2) . ' BDT) এর চেয়ে বেশি হতে পারবে না।');
                                    }
                                }
                            }
                        };
                    }),

                Forms\Components\DatePicker::make('transaction_date')
                    ->default(now())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('transaction_number')
                    ->label('Txn ID')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('transaction_date')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('booking.booking_reference')
                    ->label('Booking Ref')
                    ->searchable(),

                Tables\Columns\TextColumn::make('client.name')
                    ->label('Client')
                    ->searchable(),

                Tables\Columns\TextColumn::make('vendor.company_name')
                    ->label('Vendor')
                    ->searchable()
                    ->placeholder('N/A'),

                Tables\Columns\TextColumn::make('type')
                    ->badge(),

                Tables\Columns\TextColumn::make('amount')
                    ->money('BDT')
                    ->sortable(),
            ])
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
                Action::make('downloadReceipt')
                    ->label('Receipt')
                    ->icon('heroicon-o-printer')
                    ->color('info')
                    ->url(fn(Transaction $record) => route('transactions.receipt', $record))
                    ->openUrlInNewTab()
                    ->visible(fn(Transaction $record) => $record->type === 'client_payment'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
