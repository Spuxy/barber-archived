<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
	public function reserveDate(Request $request){
//		Day::where('time', $request->time)->where('day', $request->day)->where('barber_id',$request->barber)->update(['reserved'=>1]);
		$request->offsetUnset('barber');
		Reservation::create($request->all());
		return (['message'=>'success']);
	}

	public function getReservedDays(){
		return Reservation::all()->where('reserved',0);
	}
	public function getJohnReservedDays(){
		return Reservation::where('barber_id','John')->orderBy('from')->get();
	}
	public function getFilipReservedDays(){
		return Reservation::where('barber_id','Filip')->orderBy('from')->get();
	}
}
