<?php

namespace App\Filament\Resources\ProjectServiceResource\Pages;

use App\Filament\Resources\ProjectServiceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectService extends EditRecord
{
    protected static string $resource = ProjectServiceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
