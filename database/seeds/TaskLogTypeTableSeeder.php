<?php

use Illuminate\Database\Seeder;
use App\Task_log_type;

class TaskLogTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Task_log_type::truncate();

      $faker = \Faker\Factory::create();

      Task_log_type::create(['log_type' => 'Log1']);
      Task_log_type::create(['log_type' => 'Log2']);
      Task_log_type::create(['log_type' => 'Log3']);
      Task_log_type::create(['log_type' => 'Log4']);
      Task_log_type::create(['log_type' => 'Log5']);
    }
}
