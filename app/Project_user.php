<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_user extends Model
{
      protected $fillable = ['project_id', 'user_id', 'role_id'];

      public $timestamps = false;

      public function role() {
        return $this->belongsTo('App\Role');
      }

      public function user() {
        return $this->belongsTo('App\User');
      }

      public function project() {
        return $this->belongsTo('App\Project');
      }
}
