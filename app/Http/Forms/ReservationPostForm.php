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
		'name'      => 'required',
		'lastName'  => 'required',
		'phone'     => 'required',
		'email'     => 'required',
		'from'      => 'required',
		'day'       => 'required',
		'barber_id' => 'required'
	];

	public function process() {
		Reservation::create($this->formBody());
	}

}