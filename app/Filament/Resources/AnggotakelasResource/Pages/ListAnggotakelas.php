<?php

namespace App\Filament\Resources\AnggotakelasResource\Pages;

use App\Filament\Resources\AnggotakelasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnggotakelas extends ListRecords
{
    protected static string $resource = AnggotakelasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
