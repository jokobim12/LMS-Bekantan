<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse;
use App\Http\Responses\Auth\LogoutResponse as CustomLogoutResponse;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Pakai custom logout response
        $this->app->bind(LogoutResponse::class, CustomLogoutResponse::class);
    }

    public function boot(): void
    {
        //
    }
}
