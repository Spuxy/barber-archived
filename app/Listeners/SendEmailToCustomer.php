<?php

namespace App\Listeners;

use App\Events\CustomerHasAsked;

class SendEmailToCustomer
{
    /**
     * Create the event listener.
     *
     * @return void
     */
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
        var_dump('sending a welcom email to'. $event->ask->lastName);
    }
}
