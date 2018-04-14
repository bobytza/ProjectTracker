<?php

use Illuminate\Database\Seeder;
use App\Project_status;

class ProjectStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Project_status::truncate();

      $faker = \Faker\Factory::create();

      Project_status::create(['project_status' => 'Finalizat']);
      Project_status::create(['project_status' => 'Neinceput']);
      Project_status::create(['project_status' => 'In desfasurare']);
      Project_status::create(['project_status' => 'Status1']);
      Project_status::create(['project_status' => 'Status2']);
    }
}
