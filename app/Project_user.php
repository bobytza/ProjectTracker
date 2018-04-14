<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_user extends Model
{
      protected $fillable = ['project_id', 'user_id', 'role_id'];

      public $timestamps = false;
}
