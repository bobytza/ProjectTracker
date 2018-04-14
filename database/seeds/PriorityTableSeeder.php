<?php

use Illuminate\Database\Seeder;
use App\Priority;

class PriorityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Priority::truncate();

      $faker = \Faker\Factory::create();

      Priority::create(['priority' => 'Foarte important']);
      Priority::create(['priority' => 'Important']);
      Priority::create(['priority' => 'Mai putin important']);
      Priority::create(['priority' => 'Neimportant']);
      Priority::create(['priority' => 'Deloc important']);
    }
}
