<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Aisha Ayusti",
        "nim" => "13242520043",
        "prodi" => "Teknologi Informasi",
        "gambar" => "images"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita"
    ]);
});