<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
	public function reserveDate(Request $request){
		Reservation::create($request->all());
		return (['message'=>'success']);
	}

	public function getReservedDays(){
		return Reservation::all();
	}
	public function getJohnReservedDays(){
		return Reservation::where('barber_id',0)->get();
	}
	public function getFilipReservedDays(){
		return Reservation::where('barber_id',1)->get();
	}
}
