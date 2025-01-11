<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kitab;

class KitabSeeder extends Seeder
{
    public function run()
    {
        Kitab::create([
            'nama_kitab' => 'Kitab Fathul Qarib',
            'penulis' => 'Abu Syuja',
            'deskripsi' => 'Kitab fiqih dasar untuk pemula.',
        ]);

        Kitab::create([
            'nama_kitab' => 'Kitab Riyadhus Shalihin',
            'penulis' => 'Imam Nawawi',
            'deskripsi' => 'Kitab kumpulan hadits tentang akhlak dan ibadah.',
        ]);
    }
}

