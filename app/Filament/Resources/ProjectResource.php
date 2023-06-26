<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use App\Models\ProjectCategory;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ProjectResource extends Resource
{
    use Translatable;

    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Projects';

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
                        Forms\Components\Textarea::make('about')->required(),
                        Forms\Components\TextInput::make('link')->required(),
                        Forms\Components\TextInput::make('year')->required()->numeric(),

                        Select::make('category_id')
                            ->options(ProjectCategory::all()
                                ->pluck('name', 'id')->toArray()),
                        FileUpload::make('image')->image(),

                        Select::make('technologies')
                            ->relationship('technologies', 'name') //The relationship you just created
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                            ])
                            ->multiple()
                            ->preload()
                            ->placeholder('Type to search or add new using \'+\' button on the right'),
                        Select::make('categories')
                            ->relationship('categories', 'name') //The relationship you just created
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                            ])
                            ->multiple()
                            ->preload()
                            ->placeholder('Type to search or add new using \'+\' button on the right'),

                        Select::make('services')
                            ->relationship('services', 'name') //The relationship you just created
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                            ])
                            ->multiple()
                            ->preload()
                            ->placeholder('Type to search or add new using \'+\' button on the right'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('year'),
                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\ImageColumn::make('image'),
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
            RelationManagers\TechnologiesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
