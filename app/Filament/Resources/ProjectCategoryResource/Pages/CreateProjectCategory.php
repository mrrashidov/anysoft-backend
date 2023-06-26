<?php

namespace App\Filament\Resources\ProjectCategoryResource\Pages;

use App\Filament\Resources\ProjectCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProjectCategory extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = ProjectCategoryResource::class;


    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make()
        ];
    }
}
