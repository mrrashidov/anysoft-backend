<?php

namespace App\Filament\Resources\ProjectTechnologyResource\Pages;

use App\Filament\Resources\ProjectTechnologyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectTechnology extends EditRecord
{
    protected static string $resource = ProjectTechnologyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
