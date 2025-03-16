<?php

namespace Database\Factories;

use App\Models\Busrit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Busrit>
 */
class BusritFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Busrit::class;
    public function definition(): array
    {
        return [
            'duur_busrit'=>$this->faker->numberBetween(1, 2) . 'uur',
            'vertrektijd'=>$this->faker->numberBetween(0, 24) . ':' . $this->faker->numberBetween(10, 59),
            'aankomsttijd'=>$this->faker->numberBetween(0, 24) . ':' . $this->faker->numberBetween(10, 59),
            'aankomst_locatie'=>$this->faker->city(),
            'prijs'=>$this->faker->randomFloat(2, 0, 100),
            'beschikbare_stoelen'=>$this->faker->numberBetween(1, 70),
            'vertrek_locatie'=>$this->faker->city(),
        ];
    }
}
