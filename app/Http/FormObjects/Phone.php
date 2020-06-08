<?php

namespace App\Http\FormObjects;

use Exception;

class Phone extends FormObject {

	private $number;

	public function __construct($number) {

		if ( $number < 6 ) {
			throw new Exception('Number is too short');
		}

		if ( $number === 'string' ) {
			throw new Exception('Bad format');
		}

		$this->number = $this->formatInput($number);

	}
}