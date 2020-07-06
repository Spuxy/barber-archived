<?php

namespace App\Listeners;

use App\Events\CustomerHasAsked;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerEmailer;

class SendEmailToCustomer
{



    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CustomerHasAsked  $event
     * @return void
     */
    public function handle(CustomerHasAsked $event)
    {
	    Mail::to($event->ask->email)->send(new CustomerEmailer($event->ask->firstName, $event->ask->lastName));
    }
}
