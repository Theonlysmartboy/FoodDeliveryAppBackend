<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
 */

/* Route::get('/', function () {
  return view('welcome');
  }); */
Route::match(['get', 'post'], '/', 'AdminController@login');
Route::get('/admin/dashboard', 'AdminController@dashboard');

//Vendor routes
Route::get('/vendor/dashboard', 'VendorController@dashboard');
Route::get('/admin/vendor', 'VendorController@index');
Route::match(['get', 'post'], '/admin/vendor/create', 'VendorController@create');
Route::match(['get', 'post'], '/admin/vendor/edit/{id}', 'VendorController@update');
Route::match(['get', 'post'], '/admin/vendor/delete/{id}', 'VendorController@delete');

//users routes
Route::get('/admin/user', 'UserController@index');
Route::match(['get', 'post'], '/admin/user/edit/{id}', 'UserController@update');
Route::match(['get', 'post'], '/admin/user/delete/{id}', 'UserController@delete');


//Product routes
Route::get('/vendor/product', 'ProductController@index');
Route::get('/vendor/product', 'ProductController@update');
Route::get('/vendor/product', 'ProductController@delete');

//Sales routes
Route::get('/vendor/sales', 'SalesController@index');
Route::get('/vendor/sales', 'SalesController@update');
Route::get('/vendor/sales', 'SalesController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'LogoutController@logout');
