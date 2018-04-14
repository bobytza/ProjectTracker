<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task_log_type extends Model
{
      protected $fillable = ['log_type'];

      public $timestamps = false;
}
