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
        Team::factory(4)->create();
        Player::factory(20)->create();

        $this->call([
            PermissionSeeder::class,
        ]);
        User::factory(2)->create();
        $admin = User::find(1);
        $admin->assignRole('admin');
        $admin = User::find(2);
        $admin->assignRole('coach');
        $admin= Player::find();
        $admin->assignRole('player');
    }
}
