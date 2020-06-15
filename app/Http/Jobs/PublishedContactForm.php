<?php

namespace App\Http\Jobs;

class PublishedContactForm {

	public static function handle() {
		return (new static())
			->sendEmail()
			->addToDb();
	}

	public function sendEmail() {
		var_dump('sending email');

		return $this;
	}

	public function addToDb() {
		var_dump('adding to db');

		return $this;
	}

}