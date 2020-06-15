<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\CustomerHasAsked;

class Contact extends Model
{
    protected $guarded = [];

	public static function hasBeenSent($attributes) {
		$ask = static::create($attributes);
        event(new CustomerHasAsked($ask));
	}
}
