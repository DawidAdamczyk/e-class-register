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

Route::get('/teacher', function(){
    echo "Hello teacher";
})->middleware('auth','teacher');
 
Route::get('/student', function(){
    echo "Hello student";
})->middleware('auth','student');

Route::resource('teacher', 'TeacherController');

Route::get('student' , 'StudentController@index');

Route::post('student', 'StudentController@orderBy');
