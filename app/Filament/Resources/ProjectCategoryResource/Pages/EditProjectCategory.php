<?php

namespace App\Filament\Resources\ProjectCategoryResource\Pages;

use App\Filament\Resources\ProjectCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
class EditProjectCategory extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ProjectCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make()
        ];
    }
}
