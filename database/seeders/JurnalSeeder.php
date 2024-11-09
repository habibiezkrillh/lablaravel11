<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurnal;

class JurnalSeeder extends Seeder
{
    public function run(): void
    {
        Jurnal::create([
            'judul' => 'Artificial Intelligence and Society',
            'penulis' => 'John McCarthy',
            'tahun_terbit' => 2020,
            'abstrak' => 'Exploring the impacts of AI on modern society and future implications.',
            'volume' => 14,
            'nomor' => 2,
            'kategori' => 'Teknologi',
            'link_akses' => 'https://jurnal.example.com/ai-society',
        ]);

        Jurnal::create([
            'judul' => 'Quantum Computing Advances',
            'penulis' => 'Jane Smith',
            'tahun_terbit' => 2019,
            'abstrak' => 'A review of recent advancements in quantum computing technology.',
            'volume' => 13,
            'nomor' => 4,
            'kategori' => 'Fisik',
            'link_akses' => 'https://jurnal.example.com/quantum-computing',
        ]);

        Jurnal::create([
            'judul' => 'Jurnal Pembelajaran Sosial Emosional',
            'penulis' => 'Citra Wulandari',
            'tahun_terbit' => 2024,
            'abstrak' => 'A review of recent advancements in quantum computing technology.',
            'volume' => 13,
            'nomor' => 4,
            'kategori' => 'Online',
            'link_akses' => 'https://guru.kemdikbud.go.id/bukti-karya/pdf/659718?source=BK_EXPLORATION_PAGE',
        ]);

        Jurnal::create([
            'judul' => 'Advances in Machine Learning Algorithms for Big Data',
            'penulis' => 'Alice Johnson',
            'tahun_terbit' => 2023,
            'abstrak' => 'A comprehensive overview of machine learning methods applied to large-scale data processing.',
            'volume' => 30,
            'nomor' => 2,
            'kategori' => 'Computer Science',
            'link_akses' => 'https://www.mlbigdata.com/journal12345',
        ]);
    }
}
