<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
      protected $fillable = ['priority'];

      public $timestamps = false;

      public function tasks() {
        return $this->hasMany('App\Task');
      }
}
