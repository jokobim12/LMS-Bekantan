<?php

namespace App\Filament\Widgets;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\Pengajar;
use App\Models\MataKuliah; // atau Matakuliah, sesuaikan dengan nama model kamu
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class DashboardStats extends BaseWidget
{
    protected static ?int $sort = 1; // urutan widget di dashboard

    protected function getCards(): array
    {
        return [
            Card::make('Total Kelas', Kelas::count())
                ->icon('heroicon-o-academic-cap'),
            Card::make('Total Mahasiswa', Mahasiswa::count())
                ->icon('heroicon-o-users'),
            Card::make('Total Pengajar', Pengajar::count())
                ->icon('heroicon-o-user-circle'),
            Card::make('Total Mata Kuliah', MataKuliah::count()) // sesuaikan nama model!
                ->icon('heroicon-o-book-open'),
        ];
    }
}
