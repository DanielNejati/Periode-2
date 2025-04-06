<?php

namespace Database\Factories;

use App\Models\Bus;
use App\Models\Busride;
use App\Models\Festival;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Busride>
 */
class BusrideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Busride::class;
    public function definition(): array
    {
        $price = $this->faker->numberBetween(1, 10) * 5;
            return [
                'festival_id'=> Festival::factory(),
                'duration'=> $this->faker->numberBetween(1, 7),
                'departure_time'=> $this->faker->time(),
                'arrival_time'=> $this->faker->time(),
                'departure'=> $this->faker->city(),
                'location' => $this->faker->city(),
                'date'=> $this->faker->date(),
                'price'=> $price,
        ];
    }
}
