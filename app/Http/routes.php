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


Route::get('/', 'CourseController@index')->name('course-home');;
//pages ..

Route::get('/terms','PagesController@terms');
Route::get('/privacy','PagesController@privacy');
Route::get('/contactus','PagesController@contactus');
Route::get('/faq','PagesController@faq');
Route::get('/quality','PagesController@quality');
Route::get('/becomeTeacher','PagesController@becomeTeacher');
Route::get('/createcourse','PagesController@createcourse');
Route::get('/courseview','PagesController@courseview');
Route::get('/hello','PagesController@instruct');
Route::get('/profile','PagesController@profile');
//Route::get('/create','mycourseController@create');
Route::post('/courseview', 'PagesController@courseview');

Route::get('/mycourses', array('uses' => 'PagesController@mycourse', 'as' => 'pages.mycourse'));
///contact us route
Route::post('/contactemail','PagesController@send');

Route::get('/testfooter', function() {

	return view('pages.footer') ;
});


Route::get('/courses', 'CourseController@show')->name('course-browse');


Route::get('/test', function () {
    
	$categories = App\Category::all();
	return view('test',compact('categories'));
});
Route::auth();

//Route::get('/home', 'HomeController@index');


Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

//  confirm account :

Route::get('register/confirm/{token}','Auth\AuthController@confirmEmail');
Route::resource('mycourse', 'mycourseController');