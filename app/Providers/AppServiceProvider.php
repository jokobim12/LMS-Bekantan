<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse;
use App\Http\Responses\Auth\LogoutResponse as CustomLogoutResponse;
use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Override response logout bawaan Filament
        $this->app->bind(LogoutResponse::class, CustomLogoutResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         Filament::serving(function () {
        Filament::registerUserMenuItems([
            UserMenuItem::make()
                ->label('Edit Profil')
                ->url('/user/profile')
                ->icon('heroicon-o-user-circle'),
        ]);
    });
    }
}
