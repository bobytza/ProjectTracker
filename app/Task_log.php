<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task_log extends Model
{
      protected $fillable = ['task_id', 'user_id', 'task_log_title',
        'task_log_description', 'task_status_id', 'log_visible_to_customer',
        'task_log_type_id', 'actual_hours', 'task_type_id'];

      public $timestamps = false;
}
