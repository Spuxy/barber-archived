<?php

namespace App\Http\Controllers\Reservation;

use App\Reservation;
use Illuminate\Http\Request;

use App\Http\Forms\ReservationPostForm;

use App\Day;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TestNotify;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;


class ReservationController extends Controller
{
	use Notifiable;
	/**
	 * Function for reservation form
	 */
	public function create() {
		return view('reservation.index');
	}

	public function store(Request $request){
		$form = new ReservationPostForm($request);
		$form->save();
//		Log::info($form);
//		$form->notify(new TestNotify($request));
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
