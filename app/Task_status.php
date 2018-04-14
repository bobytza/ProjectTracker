<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task_status extends Model
{
      protected $fillable = ['task_status'];

      public $timestamps = false;
}
