<?php

namespace Database\Factories;

use App\Models\Bus;
use App\Models\Busride;
use App\Models\Busrit;
use App\Models\Festival;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Busrit>
 */
class BusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Bus::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'festival_id'=> Festival::factory()
        ];
    }
}
