<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/tentang', function () {
    return view('tentang');
});