<?php

namespace Database\Factories;

use App\Models\festival;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\festival>
 */
class FestivalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Festival::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'duration' => $this->faker->numberBetween(1, 10),
            'location' => $this->faker->city,
            'festival_type' => $this->faker->word,
            'price' => $this->faker->randomDigit,

        ];
    }
}
