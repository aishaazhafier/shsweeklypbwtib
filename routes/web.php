<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

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

Route::get('/berita', function () {
    return view('berita', [
        "title" => "berita",
        "beritas" => Berita::ambilberita(),
    ]);
});

Route::get('/berita/{slug}', function ($slug) {

$data_berita = [
    [
        "judul" => "Mahasiswa TI",
        "slug" => "mahasiswa-ti",
        "penulis" => "Sasha",
        "konten" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, voluptate dolorum qui consequatur facilis corrupti quae inventore. Quasi, voluptate quis! Accusamus maiores nulla aliquam voluptatibus sint unde magnam officia vero.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, voluptate dolorum qui consequatur facilis corrupti quae inventore. Quasi, voluptate quis! Accusamus maiores nulla aliquam voluptatibus sint unde magnam officia vero."
    ],
    [
        "judul" => "Dosen TI",
        "slug" => "dosen-ti",
        "penulis" => "Zen",
        "konten" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, voluptate dolorum qui consequatur facilis corrupti quae inventore. Quasi, voluptate quis! Accusamus maiores nulla aliquam voluptatibus sint unde magnam officia vero.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, voluptate dolorum qui consequatur facilis corrupti quae inventore. Quasi, voluptate quis! Accusamus maiores nulla aliquam voluptatibus sint unde magnam officia vero."
    ]
];

    return view('beritatunggal', 
    [
        "title" => Berita::getJudul($slug),
        "berita" => Berita::getBerita($slug),
    ]);
});