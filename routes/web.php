<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');
Route::get('/about','HomeController@about');
Route::get('/user_dashboard', 'UsersController@dashboard');
Route::get('/user_profile', 'UsersController@view');
Route::get('/edit_user_profile', 'UsersController@edit');
Route::get('/request_time_off', 'UsersController@requestTimeOff');
Route::get('/view_time_off', 'UsersController@viewTimeOff');
Route::get('/manage_users','UsersController@index');
Route::get('/create_performance_review','UsersController@createPerformanceReview');

Route::get('/manage_departments','DepartmentsController@index');
Route::get('/manage_security','SecurityController@index');


Route::post('/create_user', 'UsersController@add');
Route::get('/create_user','UsersController@create');
