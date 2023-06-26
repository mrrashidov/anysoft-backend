<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectTechnologyResource\Pages;
use App\Filament\Resources\ProjectTechnologyResource\RelationManagers;
use App\Models\Project;
use App\Models\ProjectTechnology;
use App\Models\Technology;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ProjectTechnologyResource extends Resource
{
    protected static ?string $model = ProjectTechnology::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('project_id')
                    ->options(Project::query()
                        ->select(['id', 'name'])
                        ->get()
                        ->pluck('name', 'id')
                        ->toArray()
                    )
                    ->required(),
                Forms\Components\Select::make('technology_id')
                    ->options(Technology::query()
                        ->select(['id', 'name'])
                        ->get()
                        ->pluck('name', 'id')
                        ->toArray()
                    )
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('technology.name'),
                Tables\Columns\TextColumn::make('project.name')

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
            'index' => Pages\ListProjectTechnologies::route('/'),
            'create' => Pages\CreateProjectTechnology::route('/create'),
            'edit' => Pages\EditProjectTechnology::route('/{record}/edit'),
        ];
    }
}
