<?php

namespace App\Http\FormObjects;

use Exception;

class LastName extends FormObject {

	private $lastName;

	/**
	 * LastName constructor. Do logic
	 * Maybe requirment to config file
	 * @param $lastName
	 * @throws \Exception
	 */
	public function __construct($lastName) {

		if ( $lastName > 25 ) {
			throw new Exception('Too long lastname');
		}

		$this->lastName = $this->formatInput($lastName);
	}
}