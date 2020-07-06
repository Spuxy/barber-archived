<?php

namespace App\Http\Controllers\Barber;

use App\Barber;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarberController extends Controller {

	/**
	 * Get barbers for iterate into select input
	 * @return Barber[]|\Illuminate\Database\Eloquent\Collection
	 */
	public function index() {
		return Barber::all('name', 'id');
	}

	public function show(Request $request, $id = 1) {
		return Barber::where('id',$id)->first();
	}
}
