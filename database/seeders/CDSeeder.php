<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CD;

class CDSeeder extends Seeder
{
    public function run(): void
    {
        CD::create([
           'judul' => 'Abbey Road',
            'penerbit' => 'The Beatles',
            'kategori' => 'Musik',
            'tahun_rilis' => 1969,
            'stok' => 4, 
        ]);

        CD::create([
            'judul' => 'Kisah Klasik Untuk Masa Depan',
            'penerbit' => 'Sheila On 7',
            'kategori' => 'Musik',
            'tahun_rilis' => 2000,
            'stok' => 5,
        ]);

        CD::create([
            'judul' => 'Taman Langit',
            'penerbit' => 'Peterpan',
            'kategori' => 'Musik',
            'tahun_rilis' => 2003,
            'stok' => 8,
        ]);

        CD::create([
            'judul' => '(Whats the Story) Morning Glory?',
            'penerbit' => 'Oasis',
            'kategori' => 'Musik',
            'tahun_rilis' => 1995,
            'stok' => 2,
        ]);

        CD::create([
            'judul' => 'Kamen Rider Ryuki',
            'penerbit' => 'TOEI Company',
            'kategori' => 'Film',
            'tahun_rilis' => 2003,
            'stok' => 5,
        ]);
    }
}
