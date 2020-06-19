<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

use App\Http\Forms\ReservationPostForm;

use App\Day;


class ReservationController extends Controller
{

	/**
	 * Function for reservation form
	 */
	public function create() {
		return view('reservation.index');
	}

	public function reserveDate(Request $request){
		$form = new ReservationPostForm($request);
		$form->save();
		session()->flash('reserved_day', 'Reservation was successful!');
		return view('home.index');
	}

	public function getJohnReservedDays(){
		return Reservation::where('barber','John')->orderBy('from')->get();
	}

	/**
	 * Api for fetch reserved days of Filip
	 * @return mixed
	 */
	public function getFilipReservedDays(){
		return Reservation::where('barber','Filip')->orderBy('from')->get();
	}
}
