<?php

namespace App\Filament\Resources\ProjectTechnologyResource\Pages;

use App\Filament\Resources\ProjectTechnologyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectTechnologies extends ListRecords
{
    protected static string $resource = ProjectTechnologyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
