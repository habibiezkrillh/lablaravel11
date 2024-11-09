<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skripsi;

class SkripsiSeeder extends Seeder
{
    public function run(): void
    {
        Skripsi::create([
            'judul' => 'Analisis Pengaruh Media Sosial terhadap Perilaku Konsumen',
            'penulis' => 'Andi Susanto',
            'tahun_terbit' => 2023,
            'abstrak' => 'Skripsi ini membahas bagaimana media sosial mempengaruhi keputusan konsumen dalam pembelian produk.',  
        ]);

        Skripsi::create([
            'judul' => 'Pengaruh Game Online Terhadap Perilaku Remaja SMA Athirah',
            'penulis' => 'Muh Habbibie Zikrilllah',
            'tahun_terbit' => 2022,
            'abstrak' => 'Skripsi ini bertujuan untuk mengetahui dampak game online terhadap perilaku remaja.',
        ]);

        Skripsi::create([
            'judul' => 'Penerapan Machine Learning dalam Prediksi Harga Saham',
            'penulis' => 'Dewi Lestari',
            'tahun_terbit' => 2022,
            'abstrak' => 'Penelitian ini menggunakan algoritma machine learning untuk memprediksi harga saham berdasarkan data historis.',
        ]);
    }
}
