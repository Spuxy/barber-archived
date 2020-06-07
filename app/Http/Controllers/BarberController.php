<?php

namespace App\Http\Controllers;

use App\Barber;
use Illuminate\Http\Request;

class BarberController extends Controller
{
	public function getBarbers()
	{
//		dd(Barber::all()->get('firstname'));
		$barbers = Barber::all('firstname','id');
		return $barbers;
	}
}
