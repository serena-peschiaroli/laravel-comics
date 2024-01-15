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

            $footerItems = [
                'Item1' => [
                    'title' => 'title1',
                    'links' => ['link1', 'link2', 'link3', 'link4', 'link5', 'link6', 'link7'],
                ],
                'Item2' => [
                    'title' => "title2",
                    'links' => ["link1", "link2", "link3", "link4", "link5", "link6", "link7", "link8", "link9", "link10"],
                ],
                'Item3' => [
                    'title' => "title3",
                    'links' => ["link1", "link2", "link3", "link4", "link5"],
                ],
                'Item4' => [
                    'title' => "title4",
                    'links' => ["link1", "link2"],
                ],
            ];
            $socialIcons = [
                [
                    'name' => 'facebook',
                    'icon' => 'public/img/footer-facebook.png',
                ],
                [
                    'name' => 'periscope',
                    'icon' => 'public/img/footer-periscope.png',
                ],
                [
                    'name' => 'pinterest',
                    'icon' => 'public/img/footer-pinterest.png',
                ],
                [
                    'name' => 'twitter',
                    'icon' => 'public/img/footer-twitter.png',
                ],
                [
                    'name' => 'youtube',
                    'icon' => 'public/img/footer-youtube.png',
                ],
            ];


            // condividi tutti gli items con tutte le view
            $view->with(compact('navItems', 'footerItems', 'socialIcons'));
        });
    }
    
}
