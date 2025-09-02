<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AnggotaKelasController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\ManajerController;

// Halaman awal langsung redirect ke login
Route::get('/', function () {
    return redirect('/login');
});

// Custom logout untuk semua user (termasuk admin)
Route::post('/logout', function () {
    auth('web')->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    
    return redirect('/login'); // biar setelah logout juga ke login
})->name('custom.logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    // Dashboard redirect berdasarkan role
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    
    // Route untuk Mahasiswa
    Route::middleware(['role:mahasiswa'])->prefix('mahasiswa')->name('mahasiswa.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'mahasiswa'])->name('dashboard');
    });
    
    // Route untuk Pengajar
    Route::middleware(['role:pengajar'])->prefix('pengajar')->name('pengajar.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'pengajar'])->name('dashboard');
    });


    // Tambahan Route CRUD
    // Program Studi
    Route::resource('programstudi', ProgramStudiController::class);

    // Mata Kuliah
    Route::resource('matakuliah', MataKuliahController::class);

    // Mahasiswa
    Route::resource('mahasiswa', MahasiswaController::class);

    // Kelas
    Route::resource('kelas', KelasController::class);

    // Anggota Kelas
    Route::resource('anggota-kelas', AnggotaKelasController::class);

    //Pengajar
    Route::resource('pengajar', PengajarController::class);

    //Manajer
    Route::resource('manajer', ManajerController::class);

});