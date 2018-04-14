<?php

use Illuminate\Database\Seeder;
use App\Project_user;

class ProjectUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Project_User::truncate();

      $faker = \Faker\Factory::create();

      Project_user::create(['project_id' => 1, 'user_id' => 2, 'role_id' => 3]);
      Project_user::create(['project_id' => 2, 'user_id' => 5, 'role_id' => 2]);
      Project_user::create(['project_id' => 3, 'user_id' => 8, 'role_id' => 1]);

    }
}
