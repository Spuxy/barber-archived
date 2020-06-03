<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use App\Day;

class ReservationController extends Controller
{
	public function reserveDate(Request $request){
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
	}
	public function getFilipReservedDays(){
		return Day::where('barber_id','filip')->where('reserved',0)->orderBy('time')->get();
	}
}
