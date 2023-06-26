<?php

namespace App\Filament\Resources\ReviewResource\Pages;

use App\Filament\Resources\ReviewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReview extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ReviewResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make()

        ];
    }
}
