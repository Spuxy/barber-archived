<?php

namespace App\Http\Forms;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

abstract class Form {
	use ValidatesRequests;

	protected $request;
	protected $fields;

	public function __construct(Request $request) {
		$this->request = $request;
	}

	public function isValid() {
		return $this->validate($this->request, $this->fields);
	}

	abstract public function process();

	public function formBody(){
		return $this->request->all();
	}

	public function save() {
		if ($this->isValid()){
			return $this->process();
		}
		return false;
	}

}