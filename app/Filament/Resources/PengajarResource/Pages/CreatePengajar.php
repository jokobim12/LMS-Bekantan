<?php

namespace App\Filament\Resources\PengajarResource\Pages;

use App\Filament\Resources\PengajarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePengajar extends CreateRecord
{
    protected static string $resource = PengajarResource::class;
            protected function getRedirectUrl(): string
    {
        // setelah create, langsung ke index
        return $this->getResource()::getUrl('index');
    }
}
