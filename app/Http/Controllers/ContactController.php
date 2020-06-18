<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Jobs\PublishedContactForm;

class ContactController extends Controller {

	public $mojeVeta = 'Dobry den, chci se zeptat zda je mozne strihat doma. Predme dekuji Filip.';

	public function index() {
		return view('contact.index');
	}

	public function store(Request $request) {
		$validatedData = $this->isValidRequest($request);
//		$jobs = new PublishedContactForm();
		Contact::hasBeenSent($validatedData);
	}

	public function isValidRequest($request) {
		return $request->validate([
			'firstName' => 'required',
			'lastName'  => 'required',
			'email'     => 'required',
			'body'      => 'required',
		]);
	}
}
