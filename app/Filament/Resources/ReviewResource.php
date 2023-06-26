<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\Review;
use Filament\Forms;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ReviewResource extends Resource
{
    use Translatable;

    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\Grid::make()->schema([
                        Forms\Components\TextInput::make('company_name')->required(),
                        Forms\Components\TextInput::make('person_name')->required(),
                    ]),

                    Forms\Components\Textarea::make('text'),


                ]),
                Forms\Components\Card::make()->schema([
                    Forms\Components\Grid::make()->schema([
                        Forms\Components\FileUpload::make('company_logo')->required()->image(),
                        Forms\Components\FileUpload::make('person_logo')->required()->image(),
                    ]),
                ])
            ]);
    }

    public static function getTranslatableLocales(): array
    {
        return ['en'];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\ImageColumn::make('company_logo'),
                Tables\Columns\TextColumn::make('company_name'),
                Tables\Columns\ImageColumn::make('person_logo'),
                Tables\Columns\TextColumn::make('person_name'),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
