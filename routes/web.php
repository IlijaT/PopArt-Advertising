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

Route::get('/', 'AdvertsController@index');
Route::get('/adverts/create', 'AdvertsController@create');
Route::post('/adverts', 'AdvertsController@store');
Route::get('/adverts/{advert}', 'AdvertsController@show');
Route::get('/adverts/{advert}/edit', 'AdvertsController@edit');
Route::put('/adverts/{advert}', 'AdvertsController@update');
Route::delete('/adverts/{advert}', 'AdvertsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
