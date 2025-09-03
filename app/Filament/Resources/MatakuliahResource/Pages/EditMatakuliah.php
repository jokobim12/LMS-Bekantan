<?php

namespace App\Filament\Resources\MatakuliahResource\Pages;

use App\Filament\Resources\MatakuliahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMatakuliah extends EditRecord
{
    protected static string $resource = MatakuliahResource::class;

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
