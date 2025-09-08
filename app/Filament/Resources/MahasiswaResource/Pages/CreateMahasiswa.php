<?php

namespace App\Filament\Resources\MahasiswaResource\Pages;

use App\Filament\Resources\MahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMahasiswa extends CreateRecord
{
    protected static string $resource = MahasiswaResource::class;
    protected function getRedirectUrl(): string
    {
        // setelah create, langsung ke index
        return $this->getResource()::getUrl('index');
    }
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Cek dulu, supaya tidak dobel prefix
        if (!str_starts_with($data['mhsId'], 'MHS')) {
            $data['mhsId'] = 'MHS' . $data['mhsId'];
        }
        return $data;
    }
}
