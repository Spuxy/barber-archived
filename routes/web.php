<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Global pattern in RSP

Route::group(['name'=>'home'],function(){
	Route::get('/home','HomeController@index')->name('index');
	Route::get('/','HomeController@index')->name('index');
});

Route::group(['namespace'=>'Contact','prefix'=>'contact','name'=>'contact'],function(){
	Route::get('/', 'ContactController@index')->name('show');
	Route::post('/', 'ContactController@store')->name('store');
});

Route::group(['namespace' => 'Reservation', 'prefix'=>'reservation','name'=>'reservation'],function(){
	Route::get('/', 'ReservationController@create')->name('create')->middleware('throttle:90,1');
	Route::post('store', 'ReservationController@store')->name('store');
});

Route::group(['namespace'=>'Barber','prefix'=>'get-barbers','name'=>'barber'],function(){
	Route::get('/', 'BarberController@index')->name('index');
	Route::get('/{id?}', 'BarberController@show')->name('show');
});

Route::group(['namespace' => 'Photo', 'prefix' => 'photo', 'name' => 'photo'], function() {
	Route::get('/create', 'PhotoController@create')->name('create');
	Route::get('/', 'PhotoController@index')->name('index');
	Route::post('/', 'PhotoController@store')->name('store');
});

Auth::routes();
