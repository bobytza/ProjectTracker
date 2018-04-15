<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
      protected $fillable = ['project_id', 'task_title', 'task_description',
'priority_id', 'est_analysis', 'est_design_hours', 'est_development_hours',
'est_testing_hours', 'due_date', 'est_analysis_due_date',
'est_design_due_date', 'est_development_due_date', 'est_testing_due_date',
'actual_analysis_due_date', 'actual_design_due_date',
'actual_development_due_date', 'actual_testing_due_date', 'initial_task_type_id',
'current_task_type_id', 'license_details', 'owner_user_id'];

    public $timestamps = false;

    public function task_log_types() {
      return $this->hasMany('App\Task_log_type');
    }

    public function task_users() {
      return $this->hasMany('App\Task_user');
    }

    public function user() {
      return $this->belongsTo('App\User');
    }

    public function project() {
      return $this->belongsTo('App\Project');
    }

    public function priority() {
      return $this->belongsTo('App\Priority');
    }


}
