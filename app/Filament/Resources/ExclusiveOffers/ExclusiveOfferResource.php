<?php

namespace App\Filament\Resources\ExclusiveOffers;

use App\Filament\Resources\ExclusiveOffers\Pages\CreateExclusiveOffer;
use App\Filament\Resources\ExclusiveOffers\Pages\EditExclusiveOffer;
use App\Filament\Resources\ExclusiveOffers\Pages\ListExclusiveOffers;
use App\Models\ExclusiveOffer; // আপনার মডেলের সঠিক বানান নিশ্চিত করুন
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema; // নতুন স্কিমা ক্লাস
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Tables;

class ExclusiveOfferResource extends Resource
{
    protected static ?string $model = ExclusiveOffer::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(100),

                Forms\Components\FileUpload::make('img')
                    ->image()
                    ->directory('exclusive')
                    ->required()
                    ->maxSize(4096),

                Forms\Components\Select::make('status')
                    ->options([
                        'active' => 'Active',
                        'deactive' => 'Deactive',
                    ])
                    ->required()
                    ->default('active'),

                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('img'),
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'success' => 'active',
                        'danger' => 'inactive',
                    ]),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListExclusiveOffers::route('/'),
            'create' => CreateExclusiveOffer::route('/create'),
            'edit' => EditExclusiveOffer::route('/{record}/edit'),
        ];
    }
}