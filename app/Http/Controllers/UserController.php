<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function beranda() {
        return view('user.home');
    }
    public function galeri() {
        return view('user.galeri');
    }
    public function tentang() {
        return view('user.tentang');
    }
    public function berita() {

        return view('user.berita');
    }
    public function kontak() {
        return view('user.kontak');
    }
}
