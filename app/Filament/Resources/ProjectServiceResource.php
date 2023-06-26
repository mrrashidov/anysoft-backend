<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectServiceResource\Pages;
use App\Filament\Resources\ProjectServiceResource\RelationManagers;
use App\Models\Project;
use App\Models\ProjectService;
use App\Models\Service;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ProjectServiceResource extends Resource
{
    protected static ?string $model = ProjectService::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('project_id')
                    ->options(Project::query()
                        ->select(['id', 'name'])
                        ->get()
                        ->pluck('name', 'id')
                        ->toArray()
                    )
                    ->required(),
                Select::make('service_id')
                    ->options(Service::query()
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
                Tables\Columns\TextColumn::make('service.name'),
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
            'index' => Pages\ListProjectServices::route('/'),
            'create' => Pages\CreateProjectService::route('/create'),
            'edit' => Pages\EditProjectService::route('/{record}/edit'),
        ];
    }
}
