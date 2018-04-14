<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['customer_name', 'adress', 'city'];

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
