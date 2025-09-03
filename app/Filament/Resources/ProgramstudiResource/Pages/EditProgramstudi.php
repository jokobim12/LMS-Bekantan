<?php

namespace App\Filament\Resources\ProgramstudiResource\Pages;

use App\Filament\Resources\ProgramstudiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgramstudi extends EditRecord
{
    protected static string $resource = ProgramstudiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
        protected function getRedirectUrl(): string
    {
        // setelah edit, langsung ke index
        return $this->getResource()::getUrl('index');
    }
}
