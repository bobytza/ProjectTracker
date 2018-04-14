<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
      protected $fillable = ['project_title', 'description', 'customer_id', 'pm_user_id', 'project_status_id'];

      public $timestamps = false;

      public function project_status() {
        return $this->belongsTo('App\Project_status');
      }

      public function customer() {
        return $this->belongsTo('App\Customer');
      }

      public function user() {
        return $this->belongsTo('App\User');
      }

      public function tasks() {
        return $this->hasMany('App\Task');
      }

      public function project_users() {
        return $this->hasMany('App\Project_user');
      }
}
