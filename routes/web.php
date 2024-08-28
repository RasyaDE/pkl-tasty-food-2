<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'beranda')->name('beranda');
    Route::get('/tentang', 'tentang')->name('tentang');
    Route::get('/galeri', 'galeri')->name('galeri');
    Route::get('/berita', 'berita')->name('berita');
    Route::get('/kontak', 'kontak')->name('kontak');
});
Route::controller(NewsController::class)->group(function() {
    Route::get('/admin','index')->name('index');
    Route::get('/admin/store','create')->name('create');
    Route::post('/admin/store','store')->name('store');
});