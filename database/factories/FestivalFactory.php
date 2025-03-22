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
    protected $model = festival::class;
    public function definition(): array
    {
        return [
            'naam'=>$this->faker->name,
            'datum'=>$this->faker->date,
            'genre'=>$this->faker->word,
            'tijdsduur_festival'=>$this->faker->time,
            'locatie'=>$this->faker->streetAddress(),
            'stad'=>$this->faker->city(),
            'prijs'=>$this->faker->randomFloat(2, 0, 100),
            'festival_website_url'=>$this->faker->url,
            'beschrijving'=>$this->faker->text,
            'afbeelding'=>$this->faker->imageUrl(),
        ];
    }
}
