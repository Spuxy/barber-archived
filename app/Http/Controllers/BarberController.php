<?php

namespace App\Http\Controllers;

use App\Barber;
use Illuminate\Http\Request;

<<<<<<< Updated upstream
class BarberController extends Controller {

	/**
	 * Get barbers for iterate into select input
	 * @return Barber[]|\Illuminate\Database\Eloquent\Collection
	 */
	public function getBarbers() {
		return Barber::all('firstname', 'id');
=======
class BarberController extends Controller
{
	public function getBarbers()
	{
//		dd(Barber::all()->get('firstname'));
		$barbers = Barber::all('firstname','id');
		return $barbers;
>>>>>>> Stashed changes
	}
}
