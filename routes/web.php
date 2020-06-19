<?php

use Illuminate\Support\Facades\Route;
use App\Fascade\ParserLibrary;
use function foo\func;
use App\Barber;

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

Route::get('/galery', function(){
	$wtf = range(1,1000000000);
	dd($wtf);
	$barbers = Barber::all();
	return view('galery.index', compact('barbers'));
});
Route::get('/contact', 'ContactController@index');
Route::post('contact', 'ContactController@store');
Route::get('/', 'HomeController@index');
Route::get('/reservation', 'ReservationController@create');
Route::post('/reservation/reserveDate', 'ReservationController@reserveDate');
Route::get('/get-barbers', 'BarberController@getBarbers');



Route::get('/home', 'HomeController@index')->name('home');
