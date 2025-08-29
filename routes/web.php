<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/mahasiswa', fn() => view('mahasiswa.dashboard'))->name('mahasiswa.dashboard');
    Route::get('/pengajar', fn() => view('pengajar.dashboard'))->name('pengajar.dashboard');
    Route::get('/manajer', fn() => view('manajer.dashboard'))->name('manajer.dashboard');
});
