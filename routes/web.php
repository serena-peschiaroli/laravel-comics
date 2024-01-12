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
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $current_series = config('db.current_series');
    $shop_online = config('db.shop_online');
    return view('comics', compact('current_series', 'shop_online'));
})->name('comics');



