<?php

namespace Database\Factories;

use App\Models\Busride;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Ticket::class;
    public function definition(): array
    {

        return [
            'bus_ride_id' => Busride::inRandomOrder()->first()->bus_ride_id,
            'user_id' => null,
            'price' => $this->faker->numberBetween(25, 100),
        ];
    }
}
