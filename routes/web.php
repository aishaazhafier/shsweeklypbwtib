<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HOME');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/berita', function () {
    return view('berita');
});