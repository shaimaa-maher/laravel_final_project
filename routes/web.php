<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users','UserController@index')->name('users.index');
Route::delete('/users/{user}','UserController@destroy')->name('users.destroy');
Route::get('/users/{user}/edit','UserController@edit')->name('users.edit');
Route::put(	'/users/{user}', 'UserController@update')->name('users.update');
Route::get('/users/{user}', 'UserController@show')->name('users.show');

Route::get('/courses','CourseController@index')->name('courses.index');
Route::get('/courses/create', 'CourseController@create');
Route::post('/courses', 'CourseController@store');
Route::delete('/courses/{course}','CourseController@destroy')->name('courses.destroy');
Route::get('/courses/{course}/edit','CourseController@edit')->name('courses.edit');
Route::put(	'/courses/{course}', 'CourseController@update')->name('courses.update');
Route::get('/courses/{course}', 'CourseController@show')->name('courses.show');


