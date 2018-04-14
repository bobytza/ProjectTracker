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

Route::get('projects', 'ProjectController@index');
Route::get('projects/{project}', 'ProjectController@show');
Route::post('projects', 'ProjectController@store');
Route::put('projects/{project}', 'ProjectController@update');
Route::delete('projects/{project}', 'ProjectCont@delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
