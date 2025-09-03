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
}
