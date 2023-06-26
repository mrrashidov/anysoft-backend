<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use App\Models\ArticleCategory;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Str;

class ArticleResource extends Resource
{
    use Translatable;

    protected static ?string $model = Article::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Article & Events';
    protected static ?string $navigationGroup = 'Homepage';

    public static function getTranslatableLocales(): array
    {
        return ['en'];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Select::make('category_id')
                        ->options(ArticleCategory::all()
                            ->pluck('name', 'id')->toArray()),
                    Select::make('type')
                        ->options(['news' => 'news', 'events' => 'events']),
                    Grid::make([
                        'xl' => 2,
                    ])
                        ->schema([

                            Forms\Components\Toggle::make('in_homepage'),
                            Forms\Components\Toggle::make('in_top'),

                        ]),

                ]),

                Forms\Components\Card::make()->schema([
                    Forms\Components\Grid::make()->schema([
                        TextInput::make('title')
                            ->afterStateUpdated(function (Closure $get, Closure $set, ?string $state) {
                                if (!$get('is_slug_changed_manually') && filled($state)) {
                                    $set('slug', Str::slug($state));
                                }
                            })
                            ->reactive()
                            ->required(),
                        TextInput::make('slug')
                            ->afterStateUpdated(function (Closure $set) {
                                $set('is_slug_changed_manually', true);
                            })
                            ->required(),
                        Hidden::make('is_slug_changed_manually')
                            ->default(false)
                            ->dehydrated(false),
                    ]),

                    Forms\Components\RichEditor::make('body')
                        ->required()
                        ->toolbarButtons([
                            'attachFiles',
                            'blockquote',
                            'bold',
                            'bulletList',
                            'codeBlock',
                            'h2',
                            'h3',
                            'italic',
                            'link',
                            'orderedList',
                            'redo',
                            'strike',
                            'undo',
                        ])
                    ,
                    FileUpload::make('image')->image()->required(),
                ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\ToggleColumn::make('in_homepage'),
                Tables\Columns\IconColumn::make('in_top')
                    ->options([
                        'heroicon-o-x-circle' => 0,
                        'heroicon-o-check-circle' => 1,
                    ])
                    ->colors([
                        'heroicon-o-x-circle' => 0,
                        'success' => 1,
                    ])
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
