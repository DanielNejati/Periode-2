<?php

namespace Database\Seeders;

use App\Models\Busride;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusrideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create busrides
        Busride::factory()
            // Specifies the number of busrides to create
            ->count(10)
            ->create();
    }
}
