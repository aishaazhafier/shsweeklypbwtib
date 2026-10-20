<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "profile",
        "name" => "Aisha Ayusti",
        "nim" => "13242520043",
        "prodi" => "Teknologi Informasi",
        "gambar" => "images"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact"
    ]);
});

Route::get('/berita', [BeritaController::class, 'tampilBerita']);

Route::get('/berita/{slug}', [BeritaController::class, 'getBerita']);