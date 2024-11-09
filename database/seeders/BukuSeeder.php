<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        Buku::create([
            'judul' => 'Pemrograman Web dengan Laravel',
            'penulis' => 'Andi Wijaya',
            'penerbit' => 'Informatika Publisher',
            'tahun_terbit' => 2022,
            'kategori' => 'Pemrograman',
            'isbn' => '978-602-6233-87-6',
            'stok' => 15, 
        ]);

        Buku::create([
            'judul' => 'Data Science Fundamentals',
            'penulis' => 'Siti Lestari',
            'penerbit' => 'Techno Books',
            'tahun_terbit' => 2021,
            'kategori' => 'Data Science',
            'isbn' => '978-602-4017-89-7',
            'stok' => 10, 
        ]);

        Buku::create([
            'judul' => 'To Kill a Mockingbird',
            'penulis' => 'Harper Lee',
            'penerbit' => 'J.B. Lippincott & Co.',
            'tahun_terbit' => 1960,
            'kategori' => 'Fiksi',
            'isbn' => '978-0-06-112008-4',
            'stok' => 10,
        ]);

        Buku::create([
            'judul' => 'The Great Gatsby',
            'penulis' => 'F. Scott Fitzgerald',
            'penerbit' => 'Charles Scribners Sons',
            'tahun_terbit' => 1925,
            'kategori' => 'Fiksi',
            'isbn' => '978-0-7432-7356-5',
            'stok' => 7,
        ]);

        Buku::create([
           'judul' => '1984',
            'penulis' => 'George Orwell',
            'penerbit' => 'Secker & Warburg',
            'tahun_terbit' => 1949,
            'kategori' => 'Fiksi Ilmiah',
            'isbn' => '978-0-452-28423-4',
            'stok' => 8, 
        ]);

        Buku::create([
            'judul' => 'One Piece',
             'penulis' => 'Eiichiro Oda',
             'penerbit' => 'Shueisha',
             'tahun_terbit' => 1997,
             'kategori' => 'Komik',
             'isbn' => '978-4-08-872509-3',
             'stok' => 10, 
         ]);
    }
}
