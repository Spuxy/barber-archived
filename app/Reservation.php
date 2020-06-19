<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\FormObjects\Phone;
use App\Http\FormObjects\Name;
use App\Http\FormObjects\LastName;

class Reservation extends Model
{
	protected $guarded = [];
	public function barber(){
		return $this->belongsTo(Barber::class);
	}

	public function getPhoneAttribute($phone) {
		return new Phone($phone);
	}

	public function getFirstNameAttribute($lastName) {
		return new LastName($lastName);
	}

	public function getNameAttribute($name) {
		return new Name($name);
	}
}
