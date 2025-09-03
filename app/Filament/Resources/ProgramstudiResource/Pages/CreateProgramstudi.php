<?php

namespace App\Filament\Resources\ProgramstudiResource\Pages;

use App\Filament\Resources\ProgramstudiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProgramstudi extends CreateRecord
{
    protected static string $resource = ProgramstudiResource::class;
     protected function getRedirectUrl(): string
    {
        // setelah create, langsung ke index
        return $this->getResource()::getUrl('index');
    }
}
