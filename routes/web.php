<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Halaman awal langsung redirect ke login
Route::get('/', function () {
    return redirect('/login');
});

// Custom logout untuk semua user (termasuk admin)
Route::post('/logout', function () {
    auth()->logout();
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
});
