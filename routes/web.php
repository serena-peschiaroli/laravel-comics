<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $navItems = [
        ['title' => 'PERSONAGGI'],
        ['title' => 'COMICS'],
        ['title' => 'FILM'],
        ['title' => 'TV'],
        ['title' => 'GIOCHI'],
        ['title' => 'LINK'],
        ['title' => 'LINK'],
        ['title' => 'LINK'],
        ['title' => 'SHOP'],


    ];
    return view('home', compact('navItems'));
})->name('home');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');
