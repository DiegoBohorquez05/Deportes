<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Player;
use App\Models\Sport;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Player::factory(10)->create();
        User::factory(2)->create();

        Sport::create([
            'name' => 'Soccer',
            'description' => fake() -> text(),
            'country_of_origin' => fake()->country(),
        ]);
        Sport::create([
            'name' => 'Basket',
            'description' => fake() -> text(),
            'country_of_origin' => fake()->country(),
        ]);
        Sport::create([
            'name' => 'Microfutbol',
            'description' => fake() -> text(),
            'country_of_origin' => fake()->country(),
        ]);

        Team::create([
            'name' => 'Real Madrid',
            'fecha_creacion' => '6 de marzo de 1902',
            'team_average' => 4,
            'number_of_players' => 5,
            'sport_id' => 1
        ]);
        Team::create([
            'name' => 'Barcelona',
            'fecha_creacion' => '29 de noviembre de 1899',
            'team_average' => 5,
            'number_of_players' => 5,
            'sport_id' => 2
        ]);
        Team::create([
            'name' => 'Psg',
            'fecha_creacion' => '12 de agosto de 1970',
            'team_average' => 4,
            'number_of_players' => 3,
            'sport_id' => 3
        ]);

        Player::factory(20)->create();

        $this->call([
            PermissionSeeder::class,
        ]);
        User::factory(2)->create();
        $admin = User::find(1);
        $admin->assignRole('admin');
        $admin = User::find(2);
        $admin->assignRole('coach');
    }
}
