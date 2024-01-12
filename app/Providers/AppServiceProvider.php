<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $navItems = [
                ['title' => 'PERSONAGGI', 'url' => '#'],
                ['title' => 'COMICS', 'url' => route('comics')],
                ['title' => 'FILM', 'url' => '#'],
                ['title' => 'TV', 'url' => '#'],
                ['title' => 'GIOCHI', 'url' => '#'],
                ['title' => 'LINK', 'url' => '#'],
                ['title' => 'SHOP', 'url' => '#'],
            ];

            $view->with('navItems', $navItems);
        });
    }
}
