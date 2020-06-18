<?php

namespace App\Http\Controllers;

use App\Barber;
use Illuminate\Http\Request;

class BarberController extends Controller
{
	public function getBarbers()
	{
		return  Barber::all('firstname','id');
	}
}
