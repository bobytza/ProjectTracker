<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id');
            $table->integer('user_id');
            $table->string('task_log_title');
            $table->string('task_log_description');
            $table->integer('task_status_id');
            $table->boolean('log_visible_to_customer')->default(true);
            $table->integer('task_log_type_id');
            $table->timestamp('actual_hours');
            //$table->timestamps()->current();
            $table->integer('task_type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_logs');
    }
}
