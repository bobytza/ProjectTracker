<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Customer::truncate();

      $faker = \Faker\Factory::create();

      Customer::create([
        'customer_name' => $faker->name,
        'address' => $faker->address,
        'city' => $faker->city,
      ]);

      Customer::create([
        'customer_name' => $faker->name,
        'address' => $faker->address,
        'city' => $faker->city,
      ]);

      Customer::create([
        'customer_name' => $faker->name,
        'address' => $faker->address,
        'city' => $faker->city,
      ]);

/*
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
          }*/

    }
}
