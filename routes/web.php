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
    return view('layouts.pctecbus');
});
Route::get('/about', function () {
    return view('layouts.about');
});
Route::get('/company', function () {
    return view('website.company');
});

Route::get('/services', function () {
    return view('website.services');
});

Auth::routes();
Route::get('login/facebook', 'SocialServicesController@redirectToProvider');
Route::get('login/facebook/callback', 'SocialServicesController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('learn', 'CourseController')->middleware('role:root|Super|Admin|User');



//*******admin routes****** */
//Route::resource('users', 'UserController');
Route::resource('users', 'UserController')->middleware('role:root|Super|Admin|User');
//*******admin routes****** */