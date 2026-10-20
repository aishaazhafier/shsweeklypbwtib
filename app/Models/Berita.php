<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
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


    public static function ambilberita()
    {
        return self::$data_berita;
    }

    public static function getBerita($slug)
{
    $beritas = self::$data_berita;
    $berita = [];

    foreach ($beritas as $b) {
        if ($b["slug"] === $slug) {
            $berita = $b;
        }
    }

    return $berita;
}

public static function getJudul($slug)
{
    $berita = self::getBerita($slug);

    return $berita ["judul"];
}
}