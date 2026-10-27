<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Nette\Utils\Random;
use App\Models\Berita;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);

        Berita::factory(5)->create();

        // DB::table('users')->insert([
        //     'name' => 'Aisha Ayusti',
        //     'email' => 'aisha@gmail.com',
        //     'password' => Hash::make('aish'),
        // ]);

        // DB::table('beritas')->insert([
        //     'judul' => 'Superman Berlari Cepat Aseli',
        //     'slug' => 'superman-berlari-cepat',
        //     'penulis' => 'anonim',
        //     'konten' => 'Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database, 
        //     you will be prompted for confirmation before the seeders are executed ',
        // ]);
    }
}
