<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->string('task_title');
            $table->string('task_description');
            $table->integer('priority_id');
            $table->integer('est_analysis');
            $table->integer('est_design_hours');
            $table->integer('est_development_hours');
            $table->integer('est_testing_hours');
            $table->dateTime('due_date');
            $table->dateTime('est_analysis_due_date');
            $table->dateTime('est_design_due_date');
            $table->dateTime('est_development_due_date');
            $table->dateTime('est_testing_due_date');
            $table->dateTime('actual_analysis_due_date')->nullable();
            $table->dateTime('actual_design_due_date')->nullable();
            $table->dateTime('actual_development_due_date')->nullable();
            $table->dateTime('actual_testing_due_date')->nullable();
            $table->integer('initial_task_type_id');
            $table->integer('current_task_type_id')->nullable();
            $table->string('license_details')->nullable();
            $table->integer('owner_user_id');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
