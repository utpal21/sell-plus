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
require 'admin.php';

// Route::get('/', function () {
//     return view('front.pages.index');
// });
Route::get('/', 'HomeController@index');

// Route::group(['namespace' => 'admin'], function() {
//     Route::get('/home'
//     , 'DashboardController@index');

// });

// Route::get('login', 'admin\AuthController@index');
// Route::post('post-login', 'admin\AuthController@postLogin');
// Route::get('registration', 'admin\AuthController@registration');
// Route::post('post-registration', 'admin\AuthController@postRegistration');
// Route::get('dashboard', 'admin\AuthController@dashboard');
// Route::get('logout', 'admin\AuthController@logout');

//Route::get('/home', 'admin\HomeController@home');