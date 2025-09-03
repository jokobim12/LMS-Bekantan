<?php

namespace App\Filament\Resources\KelasResource\Pages;

use App\Filament\Resources\KelasResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKelas extends CreateRecord
{
    protected static string $resource = KelasResource::class;
            protected function getRedirectUrl(): string
    {
        // setelah create, langsung ke index
        return $this->getResource()::getUrl('index');
    }
}
