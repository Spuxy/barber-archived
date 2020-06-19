<?php

namespace App\Http\Forms;

use App\Reservation;
use App\Http\FormObjects\Phone;

class ReservationPostForm extends Form {

	/**
	 * Fields of reservation form for validate request
	 * @var array[]
	 */
	protected $fields = [
		'name'      => 'required|max:25',
		'lastName'  => 'required|max:25',
		'phone'     => 'required',
		'email'     => 'required|email',
		'from'      => 'required',
		'day'       => 'required|date',
		'barber' => 'required'
	];

	public function process() {
		Reservation::create($this->formBody());
	}

}