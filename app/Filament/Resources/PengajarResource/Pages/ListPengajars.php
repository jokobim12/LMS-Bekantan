<?php

namespace App\Filament\Resources\PengajarResource\Pages;

use App\Filament\Resources\PengajarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengajars extends ListRecords
{
    protected static string $resource = PengajarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
