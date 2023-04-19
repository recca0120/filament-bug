<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestDetailResource\Pages;
use App\Models\TestDetail;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;

class TestDetailResource extends Resource
{
    protected static ?string $model = TestDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('test')
                    ->relationship('test')
                    ->schema([
                        TextInput::make('uuid')->default(Str::uuid())->unique(),
                    ]),
                TextInput::make('description')->default(uniqid()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('description'),
                TextColumn::make('test.uuid'),
                TextColumn::make('test.detail_id'),
                TextColumn::make('test.detail_type'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListTestDetails::route('/'),
            'create' => Pages\CreateTestDetail::route('/create'),
            'edit' => Pages\EditTestDetail::route('/{record}/edit'),
        ];
    }
}
