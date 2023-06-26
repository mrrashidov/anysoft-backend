<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceItemResource\Pages;
use App\Filament\Resources\ServiceItemResource\RelationManagers;
use App\Models\Service;
use App\Models\ServiceItem;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ServiceItemResource extends Resource
{
    use Translatable;

    protected static ?string $model = ServiceItem::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function getTranslatableLocales(): array
    {
        return ['en'];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Select::make('service_id')
                    ->options(Service::all()
                        ->pluck('name', 'id')->toArray())
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('service.name')

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
            'index' => Pages\ListServiceItems::route('/'),
            'create' => Pages\CreateServiceItem::route('/create'),
            'edit' => Pages\EditServiceItem::route('/{record}/edit'),
        ];
    }
}
