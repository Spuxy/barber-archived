<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

	/**
	 * Fields of reservation form for validate request
	 * @var array[]
	 */
	protected $fields = [
		'name'      => 'required',
		'lastName'  => 'required',
		'phone'     => 'required',
		'email'     => 'required',
		'from'      => 'required',
		'day'       => 'required',
		'barber_id' => 'required'
	];

	/**
	 * Function for reservation form
	 * @param Request $request
	 * @return string[]
	 */
	public function reserveDate(Request $request){
		$request->validate($this->fields);
		Reservation::create($request->all());
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
