<?php

namespace App\Http\FormObjects;

abstract class FormObject {

	public function formatInput($value) {
		return preg_replace('/\s/', '', $value);
	}
}