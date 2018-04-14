<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $faker = \Faker\Factory::create();

        Role::create(['description' => 'Administrator']);
        Role::create(['description' => 'Utilizator']);
        Role::create(['description' => 'Project Manager']);
        Role::create(['description' => 'Client']);
        Role::create(['description' => 'Rol1']);
        Role::create(['description' => 'Rol2']);
        Role::create(['description' => 'Rol3']);

    }
}
