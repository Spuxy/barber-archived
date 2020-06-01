<?php

use Illuminate\Support\Facades\Route;
use function foo\func;

use App\barber;
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
    return view('home.index');
});
Route::get('/reservation', function () {
    return view('reservation.index');
});

Route::post('/reservation/reserveDate','ReservationController@reserveDate');
Route::get('/reserved-days-filip','ReservationController@getFilipReservedDays');
Route::get('/reserved-days-john','ReservationController@getJohnReservedDays');
Route::get('/get-reserved-days','ReservationController@getReservedDays');
Route::get('/get-barbers','BarberController@getBarbers');
