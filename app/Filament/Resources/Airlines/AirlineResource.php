<?php

namespace App\Filament\Resources\Airlines;

use App\Filament\Resources\AirlineResource\Pages;
use App\Filament\Resources\Airlines\Pages\CreateAirline;
use App\Filament\Resources\Airlines\Pages\EditAirline;
use App\Filament\Resources\Airlines\Pages\ListAirlines;
use App\Models\Airline;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema; // নতুন ভার্সনের জন্য Schema ইমপোর্ট করা হলো
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;

class AirlineResource extends Resource
{
    protected static ?string $model = Airline::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected static ?string $navigationLabel = 'Airlines';
    protected static ?string $pluralModelLabel = 'Airlines';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(100)
                    ->unique(ignoreRecord: true),

                FileUpload::make('image')
                    ->image()
                    ->disk('public') // ডিস্ক অবশ্যই পাবলিক বলে দিতে হবে
                    ->directory('airlines')
                    ->columnSpanFull(),

                RichEditor::make('details')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public') // ফিলামেন্ট টেবিলের জন্য এই ডিস্কটি বাধ্যতামূলক

                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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

    public static function getPages(): array
    {
        return [
            'index' => ListAirlines::route('/'),
            'create' => CreateAirline::route('/create'),
            'edit' => EditAirline::route('/record/{record}/edit'),
        ];
    }
}
