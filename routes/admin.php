<?php
Route::group(['prefix'  =>  'admin'], function () {
    Route::get('login', 'Admin\AuthController@index')->name('admin.login');
    Route::post('login', 'Admin\AuthController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\AuthController@logout')->name('admin.logout');

    // Route::get('/', function () {
    //     return view('admin.pages.home');
    // });
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/dashboard', function () {
            return view('admin.pages.home');
        })->name('admin.dashboard');
    });
    //Seetings route
    Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
    Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');
});