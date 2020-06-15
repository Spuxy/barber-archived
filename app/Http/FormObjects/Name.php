<?php

namespace App\Http\FormObjects;

use Exception;

class Name extends FormObject {

	public $name;

	/**
	 * Name constructor. Do logic
	 * maybe requirment to config
	 * @param $name
	 * @throws Exception
	 */
	public function __construct($name) {
		if ( mb_strlen($name) > 25 ) {
			throw new Exception('Too long name');
		}
		$this->name = $this->formatInput($name);
	}
}