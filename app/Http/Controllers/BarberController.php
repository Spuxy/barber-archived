<?php

namespace App\Http\Controllers;

use App\Barber;

class BarberController {

	/**
	 * Get barbers for iterate into select input
	 * @return Barber[]|\Illuminate\Database\Eloquent\Collection
	 */
	public function getBarbers() {
		return Barber::all('name', 'id');
	}
}
