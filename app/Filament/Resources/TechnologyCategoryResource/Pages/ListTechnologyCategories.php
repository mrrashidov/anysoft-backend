<?php

namespace App\Filament\Resources\TechnologyCategoryResource\Pages;

use App\Filament\Resources\TechnologyCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTechnologyCategories extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = TechnologyCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make()

        ];
    }
}
