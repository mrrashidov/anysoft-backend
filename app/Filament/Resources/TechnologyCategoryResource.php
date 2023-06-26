<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechnologyCategoryResource\Pages;
use App\Filament\Resources\TechnologyCategoryResource\RelationManagers;
use App\Models\TechnologyCategory;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class TechnologyCategoryResource extends Resource
{
    use Translatable;

    protected static ?string $model = TechnologyCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function getTranslatableLocales(): array
    {
        return ['en'];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name')

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTechnologyCategories::route('/'),
            'create' => Pages\CreateTechnologyCategory::route('/create'),
            'edit' => Pages\EditTechnologyCategory::route('/{record}/edit'),
        ];
    }
}
