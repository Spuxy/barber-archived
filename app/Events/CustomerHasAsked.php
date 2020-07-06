<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use App\Contact;

class CustomerHasAsked
{
    use SerializesModels;

	/**
	 * @var $ask
	 */
	public $ask;

	/**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Contact $ask)
    {
        //
	    $this->ask = $ask;
    }
}
