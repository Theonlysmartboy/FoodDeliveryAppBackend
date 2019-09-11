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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::match(['get', 'post'], '/', 'AdminController@login');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/vendor', 'VendorController@index');
Route::match(['get', 'post'],'/admin/vendor/create', 'VendorController@create');

//Vendor routes
Route::get('/vendor/dashboard', 'VendorController@dashboard');
Route::get('/vendor/product', 'ProductController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'LogoutController@logout');
