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

// Home Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contactus', 'HomeController@contactus');
Route::get('/about', 'HomeController@about');
Route::get('/videohelp', 'HomeController@videoHelp');

// Profile/Applications
Route::get('/profile', 'HomeController@applications')->name('applications');
// Profile/ManagePosts
Route::get('/profile', 'ServiceApplicationsController@manage')->name('manageApplications');
Route::post('/profile', 'OrdersController@acceptApplication')->name('accept');
Route::post('/profiles', 'OrdersController@rejectApplication')->name('reject');
Route::post('/delete', 'OrdersController@deleteApplication')->name('delete');
// Profile/Orders
Route::get('/profile', 'OrdersController@acceptedOrders')->name('acceptedOrders');

// Categories Route
Route::get('/categories', 'CategoriesController@index')->name('categories');

// SubCategories Routes
Route::get('/sub-categories', 'SubCategoriesController@allSubCategories')->name('sub-category');
Route::get('/sub-categories/{sub_categories}', 'SubCategoriesController@subCategory')->name('sub-categories');

// Services Reoutes
Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/getservices', 'ServicesController@getServices');
Route::get('/services/{sub_categories}', 'ServicesController@specificServices')->name('services');
Route::get('/details/{details}', 'ServicesController@serviceDetails')->name('services');
Route::post('/details', 'ServiceApplicationsController@store')->name('applications');

// GetServices Routes
Route::get('/p/create-service', 'GetServiceController@create');
Route::get('/getSubCategories', 'GetServiceController@getSubCategories');
Route::post('/p', 'GetServiceController@store');

// Offers Routes
Route::get('/offers', 'OffersController@index');
Route::get('/offerdetails/{details}', 'OffersController@offerDetails')->name('services');
Route::post('/offerdetails', 'ServiceApplicationsController@store')->name('applications');

Route::get('/approve', 'ServiceApplicationsController@approve')->name('approveApplications');

Route::get('/order', 'OrdersController@orderGenerated')->name('orderGenerated');

// OfferServices Routes
Route::get('/o/create-offer', 'OfferServiceController@create');
Route::get('/get_SubCategories', 'OfferServiceController@get_SubCategories');
Route::post('/o', 'OfferServiceController@store');

//Facebook Socialite
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
