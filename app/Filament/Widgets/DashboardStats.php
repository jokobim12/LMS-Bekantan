<?php

namespace App\Filament\Widgets;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\Pengajar;
use App\Models\MataKuliah; 
use App\Model\Anggotakelas;
use App\Models\User;
use App\Models\Programstudi;

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
            Card::make('Total Mata Kuliah', MataKuliah::count())
                ->icon('heroicon-o-book-open'),
            Card::make('Total Anggota Kelas', Programstudi::count())
                ->icon('heroicon-o-user-group'),
            Card::make('Total Akun', User::count())
                ->icon('heroicon-o-user-group'),
            

        ];
    }
}
