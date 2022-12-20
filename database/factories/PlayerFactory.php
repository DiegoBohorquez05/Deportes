<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'name' => fake()->name(), 
        'last-name' => fake()->lastName(),
        'age' => fake()->numberBetween(17,35),
        'nationality' => fake()->randomElement(['Francia','Colombia','España','Argentina']),
        'stars' => fake()->numberBetween(0,5),
        'team_id' => Team::all()->random()->id,
        ];
    }
}
