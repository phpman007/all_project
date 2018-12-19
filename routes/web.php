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

Route::get('/', 'LoginController@index')->name('login');
Route::post('/', 'LoginController@login');

Route::get('logout', 'LoginController@logout');
Route::get('profile', 'RegisterController@edit');
Route::post('profile', 'RegisterController@update');

Route::get('forget-password', function () {
    return view('forget-password');
});

Route::get('register', 'RegisterController@create');
Route::post('register', 'RegisterController@store');

Route::get('save-data', 'UserDataController@index')->middleware('auth');
Route::post('save-data', 'UserDataController@store')->middleware('auth');

Route::resource('group-data', 'GroupDataController')->middleware('auth:admin');

Route::get('report-data', function () {
    return view('report-data');
})->middleware('auth');
