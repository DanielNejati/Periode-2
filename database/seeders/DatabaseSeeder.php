<?php

namespace Database\Seeders;

use App\Models\Busride;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call all the seeders.
        $this->call([
            UserSeeder::class,
            FestivalSeeder::class,
            BusrideSeeder::class,
            BusSeeder::class
       ]);
    }
}
