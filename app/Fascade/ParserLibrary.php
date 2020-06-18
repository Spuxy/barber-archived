<?php


namespace App\Fascade;


use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Facade;

class ParserLibrary extends Facade {
	public static function getFacadeAccessor() {
		return 'ParserLibrary';
	}
}