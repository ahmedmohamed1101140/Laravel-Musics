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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{id}', 'HomeController@show')->name('show');
Route::get('/home/album/{id}', 'HomeController@show')->name('album');
Route::get('/home/artist/{id}', 'HomeController@show')->name('artist');
Route::post('/lyric','HomeController@find')->name('lyric.find');
