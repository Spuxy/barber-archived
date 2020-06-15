<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	public function barber() {
		return $this->belongsTo(Barber::class);
	}
}
