<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PriorityTableSeeder::class);
        $this->call(ProjectStatusTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TaskLogTypeTableSeeder::class);
        $this->call(TaskStatusTableSeeder::class);
        $this->call(TaskTypeTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(ProjectUserTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(TaskLogTableSeeder::class);
        $this->call(TaskUserTableSeeder::class);
        $this->call(TaskTableSeeder::class);
    }
}
