<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task_user extends Model
{
      protected $fillable = ['user_id', 'task_id'];

      public $timestamps = false;
}
