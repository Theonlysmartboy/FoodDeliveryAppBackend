<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
 */

 Route::get('/', function () {
  return view('welcome');
  });
Route::match(['get', 'post'], '/admin', 'AdminController@login');
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
Route::get('/vendor/meals', 'ProductController@mealindex');
Route::get('/vendor/drinks', 'ProductController@drinkindex');
Route::match(['get', 'post'], '/vendor/product/create', 'ProductController@create');
Route::match(['get', 'post'], '/vendor/product/edit/{id}', 'ProductController@update');
Route::match(['get', 'post'], '/vendor/product/delete/{id}', 'ProductController@delete');

//Sales routes
Route::get('/vendor/sales', 'SalesController@index');
Route::match(['get', 'post'], '/vendor/sales/create', 'SalesController@create');
Route::match(['get', 'post'], '/vendor/sales/edit/{id}', 'SalesController@update');
Route::match(['get', 'post'], '/vendor/sales/delete/{id}', 'SalesController@delete');

//Zones Routes
Route::get('/admin/zone', 'ZoneController@index');
Route::match(['get', 'post'], '/admin/zone/create', 'ZoneController@create');
Route::match(['get', 'post'], '/admin/zone/edit/{id}', 'ZoneController@update');
Route::match(['get', 'post'], '/admin/zone/delete/{id}', 'ZoneController@delete');
//Order routes
Route::get('/vendor/orders', 'OrderController@indexall');
Route::get('/vendor/orders/confirmed', 'OrderController@indexconfirmed');
Route::get('/vendor/orders/delivered', 'OrderController@indexdelivered');
Route::get('/vendor/orders/new', 'OrderController@indexnew');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'LogoutController@logout');

//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});