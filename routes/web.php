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
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::group(['middleware' => ['role:admin']], function () {
Route::get('/users','UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create');
Route::post('/users', 'UserController@store');
Route::delete('/users/{user}','UserController@destroy')->name('users.destroy');
Route::get('/users/{user}/edit','UserController@edit')->name('users.edit');
Route::put(	'/users/{user}', 'UserController@update')->name('users.update');
Route::get('/users/{user}', 'UserController@show')->name('users.show');

Route::get('/adminCourses','CourseController@index')->name('adminCourses.index');
Route::get('adminCourses/create', 'CourseController@create');
Route::post('/adminCourses', 'CourseController@store');
Route::get('/adminCourses/{course}', 'CourseController@show')->name('adminCourses.show');
Route::get('/adminCourses/{course}/edit','CourseController@edit')->name('adminCourses.edit');
Route::put(	'/adminCourses/{course}', 'CourseController@update')->name('adminCourses.update');
Route::delete('/adminCourses/{course}','CourseController@destroy')->name('adminCourses.destroy');
});

Route::group(['middleware' => ['role:teacher']], function () {
    Route::get('/Courses', 'TeacherCoursesController@index')->name('courses.index');
    Route::get('/courses/{course}', 'TeacherCoursesController@view')->name('course.view');
    Route::patch("/course/{course}", 'TeacherCoursesController@update')->name('course.update');
    Route::get("/courses/{course}/edit", 'TeacherCoursesController@edit')->name('course.edit');
    Route::get('/course/create', 'TeacherCoursesController@create');
    Route::post('/courses/course', 'TeacherCoursesController@store');
    Route::delete('/courses/{course}', 'TeacherCoursesController@destroy')->name('course.destroy');

    Route::get('/supporters', 'TeacherSupporterController@index')->name('supporters.index');
    Route::get('/supporter/create', 'TeacherSupporterController@create');
    Route::post('/supporters/supporter', 'TeacherSupporterController@store');
    Route::get("/supporters/{supporter}/edit", 'TeacherSupporterController@edit')->name('supporter.edit');
    Route::patch("/supporter/{supporter}", 'TeacherSupporterController@update')->name('supporter.update');
    Route::delete('/supporters/{supporter}/delete','TeacherSupporterController@delete')->name('supporters.delete');
    
});







