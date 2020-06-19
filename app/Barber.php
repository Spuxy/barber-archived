<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
	public function photos() {
		return $this->hasMany(Photo::class);
	}

	public function reservations() {
		return $this->hasMany(Reservation::class);
	}
}
