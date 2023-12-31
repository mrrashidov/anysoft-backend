<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArticle extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ArticleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make()

        ];
    }
}
