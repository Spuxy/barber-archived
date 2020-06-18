<?php

namespace App\Providers;

use App\Providers\ReservedDate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailNotification
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
     * @param  ReservedDate  $event
     * @return void
     */
    public function handle(ReservedDate $event)
    {
        //
    }
}
