<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert(
            [
                'nama' =>'m. zenudin',
                'nim' => 13242453636,
                'prodi' => 'Teknologi Informasi',
                'email' => 'zenu@gmail.com',
                'nohp' => 62989876545778,
                'foto' => 'zen.jpg'
            ]
        );

        Mahasiswa::create([
                'nama' =>'alifbata',
                'nim' => 13245678998,
                'prodi' => 'Teknologi Informasi',
                'email' => 'lif@gmail.com',
                'nohp' => 62989876545789,
                'foto' => 'zen.jpg'
            ]
        );
    }
}
