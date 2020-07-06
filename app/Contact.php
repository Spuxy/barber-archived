<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\CustomerHasAsked;

class Contact extends Model
{
    protected $guarded = [];

	public static function hasBeenSent($attributes) {
		return static::create($attributes);
	}
}
