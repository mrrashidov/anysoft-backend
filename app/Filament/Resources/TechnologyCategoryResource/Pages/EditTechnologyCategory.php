<?php

namespace App\Filament\Resources\TechnologyCategoryResource\Pages;

use App\Filament\Resources\TechnologyCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTechnologyCategory extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = TechnologyCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make()

        ];
    }
}
