<?php


namespace App\Library;


class ParserLibrary {

	private $string;

	public function __construct() {
	}

	public function getParam($var) {
		return mb_strtoupper($var);
	}

	public function parada() {
		return 'parada !!';
	}
}