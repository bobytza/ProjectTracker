<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task_type extends Model
{
      protected $fillable = ['task_types'];

      public $timestamps = false;

      public function tasks() {
        return $this->hasMany('App\Task');
      }
}
