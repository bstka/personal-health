<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
 ______     __     ______     ______   ______     __  __     ______
/\  == \   /\ \   /\  ___\   /\__  _\ /\  __ \   /\ \/ /    /\  __ \
\ \  __<   \ \ \  \ \___  \  \/_/\ \/ \ \  __ \  \ \  _"-.  \ \  __ \
 \ \_____\  \ \_\  \/\_____\    \ \_\  \ \_\ \_\  \ \_\ \_\  \ \_\ \_\
  \/_____/   \/_/   \/_____/     \/_/   \/_/\/_/   \/_/\/_/   \/_/\/_/

    https://github.com/BisTaka
    https://duniacoder.com
    https://bistaka.github.com
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test','UserDataController@index')->name('test.index');
Route::get('/dashboard','UserDataController@show')->name('test.dashboard');
Route::get('/absen','UserDataController@create')->name('test.create');
Route::post('/absen','UserDataController@store')->name('test.absen');
Route::post('/dashboard','UserDataController@store')->name('test.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
