<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'email', 'password', 'full_name', 'role_id', 'customer_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public $timestamps = false;

    public function role() {
      return $this->belongsTo('App\Role');
    }

    public function customer() {
      return $this->belongsTo('App\Customer');
    }

    public function project_users() {
      return $this->hasMany('App\Project_user');
    }

    public function project() {
      return $this->hasMany('App\Project');
    }

    public function task() {
      return $this->hasMany('App\Task');
    }

    public function task_user() {
      return $this->hasMany('App\Task_user');
    }

    public function task_log() {
      return $this->hasMany('App\Task_log');
    }
}
