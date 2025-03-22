<?php

namespace Database\Seeders;

use App\Models\Busrit;
use App\Models\busritten;
use App\Models\festival;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FestivalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        festival::factory()
            ->count(10)
            // Deze functie maakt busritten aan nadat het festival is aangemaakt
            ->afterCreating(function (festival $festival) {
                // Dit maakt 2 busritten aan voor elk festival dat wordt aangemaakt
                Busrit::factory()
                    ->count(2)
                    ->create([
                        'festival_id' => $festival->id,
                    ]);
            })
            ->create();
    }
}
