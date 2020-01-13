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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/sub-categories/{sub_categories}', 'SubCategoriesController@index')->name('sub-categories');
Route::get('/services', 'ServicesController@index')->name('services');

Route::get('/p/create-service', 'GetServiceController@create'); //->name('get-services');
Route::post('/p', 'GetServiceController@store');

// Route::get('/services', 'ProductController@index');



//Facebook Socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
