<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
	protected $guarded = [];
	public function barber(){
		return $this->belongsTo(Barber::class);
	}
}
