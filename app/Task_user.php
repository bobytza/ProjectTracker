<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task_user extends Model
{
      protected $fillable = ['user_id', 'task_id'];

      public $timestamps = false;

      public function users() {
        return $this->hasMany('App\User');
      }

      public function task() {
        return $this->hasOne('App\Task');
      }
}
