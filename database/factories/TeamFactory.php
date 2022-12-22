<?php

namespace Database\Factories;

use App\Models\Sport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // return [
        //     'name'=> fake()->randomElement(['Real Madrid','Barcelona','Juvestus','Psg']),
        //     'fecha_creacion' =>fake()->numberBetween(10,50),
        //     'team_average' => fake()->numberBetween(1,5),
        //     'number_of_players' =>fake()->numberBetween(1,15),
        //     'sport_id' => Sport::all()->random()->id,
        // ];
    }
}
