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
Route::get('/adminCourses','CourseController@index')->name('adminCourses.index');
Route::get('adminCourses/create', 'CourseController@create');
Route::get('/adminCourses/{course}/edit','CourseController@edit');
Route::post('/adminCourses', 'CourseController@store');




