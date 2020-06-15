<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
<<<<<<< Updated upstream
use App\Http\Forms\ReservationPostForm;
=======
use App\Day;
>>>>>>> Stashed changes

class ReservationController extends Controller
{

	/**
	 * Function for reservation form
	 * @param Request $request
	 * @return string[]
	 */
	public function reserveDate(Request $request){
<<<<<<< Updated upstream
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
=======
		Day::where('time', $request->time)->where('day', $request->day)->where('barber_id',$request->barber)->update(['reserved'=>1]);
		$request->offsetUnset('barber');
		Reservation::create($request->all());
		return (['message'=>'success']);
	}

	public function getReservedDays(){
		return Day::all()->where('reserved',0);
	}
	public function getJohnReservedDays(){
		return Day::where('barber_id','john')->where('reserved',0)->orderBy('time')->get();
>>>>>>> Stashed changes
	}

	/**
	 * Api for fetch reserved days of Filip
	 * @return mixed
	 */
	public function getFilipReservedDays(){
<<<<<<< Updated upstream
		return Reservation::where('barber_id','Filip')->orderBy('from')->get();
=======
		return Day::where('barber_id','filip')->where('reserved',0)->orderBy('time')->get();
>>>>>>> Stashed changes
	}
}
