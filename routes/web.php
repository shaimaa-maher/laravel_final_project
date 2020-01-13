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
Route::get('/users', 'UserController@index');
Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');

Route::get('/courses', 'CourseController@index')->name('courses.index');
Route::get('/courses/{course}', 'CourseController@view')->name('course.view');
Route::get("/courses/{course}/edit", 'CourseController@edit')->name('course.edit');
Route::patch("/course/{course}", 'CourseController@update')->name('course.update');

Route::get('/teacher/courses', 'CourseController@show')->name('teacher.index');
Route::get('/teacher/create', 'CourseController@create');
Route::post('/teacher/courses', 'CourseController@store');
// Route::get('/courses/{course}/edit','CourseController@edit')->name('courses.edit');
// Route::put('/courses/{course}','CourseController@update');
