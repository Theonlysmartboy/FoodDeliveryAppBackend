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
Route::match(['get', 'post'], '/admin/user/create', 'UserController@create');
Route::match(['get', 'post'], '/admin/user/edit/{id}', 'UserController@update');
Route::match(['get', 'post'], '/admin/user/delete/{id}', 'UserController@delete');

//Product routes
Route::get('/vendor/product', 'ProductController@index');
Route::match(['get', 'post'], '/admin/product/create', 'ProductController@create');
Route::match(['get', 'post'], '/admin/product/edit/{id}', 'ProductController@update');
Route::match(['get', 'post'], '/admin/product/delete/{id}', 'ProductController@delete');

//Sales routes
Route::get('/vendor/sales', 'SalesController@index');
Route::match(['get', 'post'], '/admin/sales/create', 'SalesController@create');
Route::match(['get', 'post'], '/admin/sales/edit/{id}', 'SalesController@update');
Route::match(['get', 'post'], '/admin/sales/delete/{id}', 'SalesController@delete');

//Zones Routes
Route::get('/admin/zone', 'ZoneController@index');
Route::match(['get', 'post'], '/admin/zone/create', 'ZoneController@create');
Route::match(['get', 'post'], '/admin/zone/edit/{id}', 'ZoneController@update');
Route::match(['get', 'post'], '/admin/zone/delete/{id}', 'ZoneController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'LogoutController@logout');
