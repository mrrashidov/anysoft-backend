<?php

namespace App\Filament\Resources\ReviewResource\Pages;

use App\Filament\Resources\ReviewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateReview extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ReviewResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make()
        ];
    }
}
