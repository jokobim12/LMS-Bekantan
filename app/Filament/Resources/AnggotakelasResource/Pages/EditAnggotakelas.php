<?php

namespace App\Filament\Resources\AnggotakelasResource\Pages;

use App\Filament\Resources\AnggotakelasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnggotakelas extends EditRecord
{
    protected static string $resource = AnggotakelasResource::class;

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
