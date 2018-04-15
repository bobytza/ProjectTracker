<?php

use Illuminate\Database\Seeder;
use App\Task_status;

class TaskStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Task_status::truncate();

      $faker = \Faker\Factory::create();

      Task_status::create(['task_status' => 'Finalizat']);
      Task_status::create(['task_status' => 'Neinceput']);
      Task_status::create(['task_status' => 'In desfasurare']);
      Task_status::create(['task_status' => 'Neasignat']);
    }
}
