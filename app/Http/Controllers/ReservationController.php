<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Forms\ReservationPostForm;

class ReservationController extends Controller
{

	/**
	 * Function for reservation form
	 * @param Request $request
	 * @return string[]
	 */
	public function reserveDate(Request $request){
		$form = new ReservationPostForm($request);
		$form->save();

		return (['message'=>'success']);
	}


	/**
	 * Api for fetch reserved days of John
	 * @return mixed
	 */
	public function getJohnReservedDays(){
		return Reservation::where('barber_id','John')->orderBy('from')->get();
	}

	/**
	 * Api for fetch reserved days of Filip
	 * @return mixed
	 */
	public function getFilipReservedDays(){
		return Reservation::where('barber_id','Filip')->orderBy('from')->get();
	}
}
