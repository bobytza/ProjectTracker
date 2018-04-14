<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        Task::create([
          'project_id' => 1,
          'task_title' => 'Task 1',
          'task_description' => 'Descrierea taskului unu',
          'priority_id' => 1,
          'est_analysis' => 2,
          'est_design_hours' =>  10,
          'est_development_hours' => 40,
          'est_testing_hours' => 4,
          'due_date' => $faker->dateTimeBetween('+0 days', '+15 days'),
          'est_analysis_due_date' => $faker->dateTimeBetween('+0 days', '+3 days'),
          'est_design_due_date' => $faker->dateTimeBetween('+0 days', '+5 days'),
          'est_development_due_date' => $faker->dateTimeBetween('+0 days', '+7 days'),
          'est_testing_due_date' => $faker->dateTimeBetween('+0 days', '+8 days'),
          'initial_task_type_id' => 1,
          'owner_user_id' => 5,
        ]);


        Task::create([
          'project_id' => 2,
          'task_title' => 'Task 2',
          'task_description' => 'Descrierea taskului doooi',
          'priority_id' => 3,
          'est_analysis' => 1,
          'est_design_hours' =>  4,
          'est_development_hours' => 60,
          'est_testing_hours' => 20,
          'due_date' => $faker->dateTimeBetween('+0 days', '+50 days'),
          'est_analysis_due_date' => $faker->dateTimeBetween('+0 days', '+8 days'),
          'est_design_due_date' => $faker->dateTimeBetween('+0 days', '+20 days'),
          'est_development_due_date' => $faker->dateTimeBetween('+0 days', '+35 days'),
          'est_testing_due_date' => $faker->dateTimeBetween('+0 days', '+46 days'),
          'initial_task_type_id' => 2,
          'owner_user_id' => 2,
        ]);
    }
}
