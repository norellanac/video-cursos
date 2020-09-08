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

Route::get('/', 'WebsiteController@index');
Route::get('about', 'WebsiteController@about');
Route::get('company', 'WebsiteController@index');
Route::get('solutions', 'WebsiteController@solutions');
Route::get('OurServices', 'WebsiteController@ourServices');
Route::get('services', 'WebsiteController@services');
Route::get('OurProducts', 'WebsiteController@ourProducts');


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
Route::resource('categories', 'CategoryController')->middleware('role:root|Super|Admin|User');
Route::resource('products', 'ProductController')->middleware('role:root|Super|Admin|User');
Route::resource('suppliers', 'SupplierController')->middleware('role:root|Super|Admin|User');
Route::resource('subcategories', 'SubcategoryController')->middleware('role:root|Super|Admin|User');
//*******admin routes****** */