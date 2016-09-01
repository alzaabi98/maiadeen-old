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

// Route::get('/', function () {
//     return view('home','CourseController@index');
// });


Route::get('/', 'CourseController@index');


Route::get('/courses', 'CourseController@show')->name('course-browse');


Route::get('/test', function () {
    
	$categories = App\Category::all();
	return view('test',compact('categories'));
});