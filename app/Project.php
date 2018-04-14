<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
      protected $fillable = ['project_title', 'description', 'customer_id', 'pm_user_id', 'project_status_id'];

      public $timestamps = false;
}
