<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task_log extends Model
{
      protected $fillable = ['task_id', 'user_id', 'task_log_title',
        'task_log_description', 'task_status_id', 'log_visible_to_customer',
        'task_log_type_id', 'actual_hours', 'task_type_id'];

      public $timestamps = false;

      public function task() {
        return $this->belongsTo('App\Task');
      }

      public function user() {
        return $this->belongsTo('App\User');
      }

      public function task_log_type() {
        return $this->belongsTo('App\Task_log_type');
      }

      public function task_status() {
        return $this->belongsTo('App\Task_status');
      }
}
