<?php

namespace App\Http\Controllers;

use App\Barber;
use Illuminate\Http\Request;

class BarberController extends Controller {

	/**
	 * Get barbers for iterate into select input
	 * @return Barber[]|\Illuminate\Database\Eloquent\Collection
	 */
	public function getBarbers() {
		return Barber::all('firstname', 'id');
	}
}
