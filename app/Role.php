<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
      protected $fillable = ['description'];

      public $timestamps = false;

      public function users() {
        return $this->hasMany('App\User');
      }

      public function project_users() {
        return $this->hasMany('App\Project_user');
      }
}
