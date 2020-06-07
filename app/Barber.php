<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    public function reservations() {
        return $this->hasMany(Reservation::class);
    }

	public function days() {
		return $this->hasMany(Day::class);
	}
}
