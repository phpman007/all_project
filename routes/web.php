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
Route::post('forget-password', 'RegisterController@forget');

Route::get('register', 'RegisterController@create');
Route::get('suggestion', 'RegisterController@suggestion');
Route::get('suggestion/{id}/detail', 'RegisterController@suggestionReportView');
Route::get('suggestion/report', 'RegisterController@suggestionReport');
Route::post('suggestion', 'RegisterController@postSuggestion');
// Route::get('suggestion/edit', 'RegisterController@suggestionSave')->middleware('auth:admin');
// Route::post('suggestion/edit', 'RegisterController@suggestionPost')->middleware('auth:admin');
Route::post('register', 'RegisterController@store');

Route::get('save-data', 'UserDataController@index')->middleware('auth');
Route::post('save-data', 'UserDataController@store')->middleware('auth');
Route::get('save-data/{id}/destroy', 'UserDataController@destroy')->middleware('auth');
Route::get('save-data/{id}/edit', 'UserDataController@edit')->middleware('auth');
Route::post('save-data/{id}/edit', 'UserDataController@update')->middleware('auth');
Route::get('save-data/{id}/delete_media/{me_id}', 'UserDataController@mediaDelete')->middleware('auth');

Route::resource('group-data', 'GroupDataController')->middleware('auth:admin');

Route::get('report-data', 'UserDataController@show')->middleware('auth');
