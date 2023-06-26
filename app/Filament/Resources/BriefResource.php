<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BriefResource\Pages;
use App\Filament\Resources\BriefResource\RelationManagers;
use App\Models\Brief;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;

class BriefResource extends Resource
{
    protected static ?string $model = Brief::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('service.name'),
                TextColumn::make('name'),
                TextColumn::make('phone'),

            ])
            ->filters([
                //
            ])
            ->actions([
//                EditAction::make(),
            ])
            ->bulkActions([
//                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBriefs::route('/'),
//            'create' => Pages\CreateBrief::route('/create'),
//            'edit' => Pages\EditBrief::route('/{record}/edit'),
        ];
    }
}
