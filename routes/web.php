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

Route::resource('adverts', 'AdvertsController');

Route::get('/users/{user}', 'UsersController@show');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::put('/users/{user}', 'UsersController@update');

Route::get('/users/{user}/adverts', 'UserAdvertsController@index');

Route::post('/photos/{advert}', 'AdvertPhotosController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
