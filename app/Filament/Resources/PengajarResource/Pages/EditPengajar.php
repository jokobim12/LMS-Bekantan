<?php

namespace App\Filament\Resources\PengajarResource\Pages;

use App\Filament\Resources\PengajarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengajar extends EditRecord
{
    protected static string $resource = PengajarResource::class;

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
