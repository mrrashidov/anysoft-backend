<?php

namespace App\Filament\Resources\TeamResource\Pages;

use App\Filament\Resources\TeamResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTeam extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = TeamResource::class;
    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make()
        ];
    }
}
