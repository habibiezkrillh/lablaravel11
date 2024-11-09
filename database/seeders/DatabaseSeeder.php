<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BukuSeeder;
use Database\Seeders\JurnalSeeder;
use Database\Seeders\CDSeeder;
use Database\Seeders\NewspaperSeeder;
use Database\Seeders\SkripsiSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            BukuSeeder::class,
            JurnalSeeder::class,
            CDSeeder::class,
            NewspaperSeeder::class,
            SkripsiSeeder::class,
        ]);
    }
}
