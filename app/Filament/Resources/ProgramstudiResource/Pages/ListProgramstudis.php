<?php

namespace App\Filament\Resources\ProgramstudiResource\Pages;

use App\Filament\Resources\ProgramstudiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgramstudis extends ListRecords
{
    protected static string $resource = ProgramstudiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
