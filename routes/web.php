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
//courses
Route::get('/courses', 'CourseController@index')->name('courses.index');
Route::get('/courses/{course}', 'CourseController@view')->name('course.view');
Route::patch("/course/{course}", 'CourseController@update')->name('course.update');
Route::get("/courses/{course}/edit", 'CourseController@edit')->name('course.edit');
Route::get('/course/create', 'CourseController@create');
Route::post('/courses/course', 'CourseController@store');
Route::delete('/courses/{course}', 'CourseController@destroy')->name('course.destroy');

//supporter
Route::get('/supporters', 'SupporterController@index')->name('supporters.index');
Route::get('/supporter/create', 'SupporterController@create');
Route::post('/supporters/supporter', 'SupporterController@store');



