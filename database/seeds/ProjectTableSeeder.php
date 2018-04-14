<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
          'project_title' => 'Hackaton FrontEnd',
          'description' => 'Locul 1',
          'customer_id' => 2,
          'pm_user_id' => 1,
          'project_status_id' => 2,
        ]);

        Project::create([
          'project_title' => 'Hackaton BackEnd',
          'description' => 'Locul 2',
          'customer_id' => 1,
          'pm_user_id' => 2,
          'project_status_id' => 1,
        ]);

        Project::create([
          'project_title' => 'Simulare admitere',
          'description' => 'Locul 3',
          'customer_id' => 3,
          'pm_user_id' => 3,
          'project_status_id' => 3,
        ]);
    }
}
