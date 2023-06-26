<?php

namespace App\Filament\Resources\TechnologyCategoryResource\Pages;

use App\Filament\Resources\TechnologyCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTechnologyCategory extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = TechnologyCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make()
        ];
    }
}
