<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'create teams']);
        Permission::create(['name'=>'read teams']);
        Permission::create(['name'=>'update teams']);
        Permission::create(['name'=>'delete teams']);

        Permission::create(['name'=>'create players']);
        Permission::create(['name'=>'read players']);
        Permission::create(['name'=>'update players']);
        Permission::create(['name'=>'delete players']);

        Permission::create(['name'=>'create sports']);
        Permission::create(['name'=>'read sports']);
        Permission::create(['name'=>'update sports']);
        Permission::create(['name'=>'delete sports']);

        $roleAdmin = Role::create(['name' => 'admin']);
        $roleCoach = Role::create(['name' => 'coach']);
        $rolePlayer = Role::create(['name' => 'coach']);

        $roleAdmin -> givePermissionto([
            'create teams',
            'create sports'
        ]);

        $roleCoach -> givePermissionto([
            'create players'
        ]);

        $rolePlayer -> givePermissionto([
            'read players'
        ]);
    }
}
