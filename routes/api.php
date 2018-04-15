<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/*Route::get('projects', 'ProjectController@index');
Route::get('projects/{project}', 'ProjectController@show');
Route::post('projects', 'ProjectController@store');
Route::put('projects/{project}', 'ProjectController@update');
Route::delete('projects/{project}', 'ProjectCont@delete');*/
Route::resource('projects', 'ProjectController');
Route::resource('tasks', 'TaskController');
Route::resource('users', 'UserController');
Route::resource('customers', 'CustomerController');
Route::resource('priorities', 'PriorityController');
Route::resource('project_statuses', 'ProjectStatusController');
//done until here
Route::resource('project_users', 'ProjectUserController');
Route::resource('roles', 'RoleController');
Route::resource('task_log_types', 'TaskLogTypeController');
Route::resource('task_logs', 'TaskLogController');
Route::resource('task_statuses', 'TaskStatusController');
Route::resource('task_types', 'TaskTypeController');
Route::resource('task_users', 'TaskUserController');

Route::get('client_from_project/{project}', 'ProjectController@getClient');
Route::get('tasks_from_project/{project}', 'ProjectController@getTasks');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
