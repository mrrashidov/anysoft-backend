<?php

namespace App\Filament\Resources\ProjectResource\RelationManagers;

use App\Models\TechnologyCategory;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class TechnologiesRelationManager extends RelationManager
{
    protected static string $relationship = 'technologies';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                    ->options(TechnologyCategory::all()
                        ->pluck('name', 'id')->toArray())
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('category.name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
//                Tables\Actions\CreateAction::make(),
//                CreateAction::make()
//                    ->mutateFormDataUsing(function (array $data): array {
//                        $data['project_id'] = auth()->id();
//
//                        return $data;
//                    })
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
