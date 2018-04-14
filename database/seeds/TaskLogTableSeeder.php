<?php

use Illuminate\Database\Seeder;
use App\Task_log;
use Carbon\Carbon;

class TaskLogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Task_log::create([
        'task_id' => 1,
        'user_id' => 2,
        'task_log_title' => 'Task log title 1',
        'task_log_description' => 'Task log description',
        'task_status_id' => 3,
        'task_log_type_id' => 2,
        'task_type_id' => 1,
      ]);

      Task_log::create([
        'task_id' => 2,
        'user_id' => 1,
        'task_log_title' => 'Task log title 2',
        'task_log_description' => 'Looooooong description',
        'task_status_id' => 2,
        'task_log_type_id' => 1,
        'task_type_id' => 3,
      ]);
    }
}
