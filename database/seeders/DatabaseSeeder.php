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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            BukuSeeder::class,
            JurnalSeeder::class,
            CDSeeder::class,
            NewspaperSeeder::class,
            SkripsiSeeder::class,
        ]);
    }
}
