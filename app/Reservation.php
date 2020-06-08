<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\FormObjects\Phone;

class Reservation extends Model
{
	protected $guarded = [];
	public function barber(){
		return $this->belongsTo(Barber::class);
	}

	public function getPhoneAttribute($phone) {
		return new Phone($phone);
	}
}
