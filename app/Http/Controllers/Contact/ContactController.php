<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Jobs\PublishedContactForm;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TestNotify;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerEmailer;
use App\Events\CustomerHasAsked;
use App\Services\AuthUserByEmail;
use App\Services\gg;
use App\Http\Controllers\Controller;
use App\Events\ReservedDate;

class ContactController extends Controller {

	public $mojeVeta = 'Dobry den, chci se zeptat zda je mozne strihat doma. Predme dekuji Filip.';

	public function index(Request $request) {
		event(new ReservedDate());
		//		\route('show.contact','glhf');t
		return view('contact.index');
	}

	public function store(Request $request) {

		$validatedData = $this->isValidRequest($request);
		//		$jobs = new PublishedContactForm();
		$contact = Contact::hasBeenSent($validatedData);
		event(new CustomerHasAsked($contact));
	}

	public function show($wtf) {
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
