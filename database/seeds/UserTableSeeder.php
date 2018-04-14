<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();

      $faker = \Faker\Factory::create();

      $password = Hash::make('parola');

      for ($i = 0; $i < 10; $i++) {
            User::create([
                'user_name' => $faker->lastName,
                'full_name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
                'role_id' => $i % 3 + 1,
                'customer_id' => $i % 2 + 1,
            ]);
          }

    }
}
