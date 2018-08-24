<?php

use Illuminate\Http\Request;
Use App\User;
Use App\Team;

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


 //user controller
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@delete');
Route::get('teams/list_teams/{id}', 'TeamController@list_teams');

 //teams controller
Route::get('teams', 'TeamController@index');
Route::get('teams/{id}', 'TeamController@show');
Route::post('teams', 'TeamController@store');
Route::put('teams/{id}', 'TeamController@update');
Route::delete('teams/{id}', 'TeamController@delete');
Route::post('users/assign_user/{id}', 'UserController@assign_user');
