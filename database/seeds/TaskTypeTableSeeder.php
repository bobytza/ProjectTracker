<?php

use Illuminate\Database\Seeder;
use App\Task_type;

class TaskTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Task_type::truncate();

      $faker = \Faker\Factory::create();

      Task_type::create(['task_type' => 'Tip task 1']);
      Task_type::create(['task_type' => 'Tip task 2']);
      Task_type::create(['task_type' => 'Tip task 3']);
      Task_type::create(['task_type' => 'Tip task 4']);
      Task_type::create(['task_type' => 'Tip task 5']);
    }
}
