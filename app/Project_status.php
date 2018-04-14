<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_status extends Model
{
      protected $fillable = ['project_status'];

      public $timestamps = false;

      public function projects() {
        return $this->hasMany('App\Project');
      }

      
}
