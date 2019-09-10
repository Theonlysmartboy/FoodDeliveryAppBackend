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

//Vendor routes
Route::get('/vendor/dashboard', 'VendorController@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'LogoutController@logout');
