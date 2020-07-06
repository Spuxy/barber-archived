<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerEmailer extends Mailable
{
    use Queueable, SerializesModels;

	private $firstName;
	private $lastName;

	/**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstName, $lastName)
    {
	    $this->firstName = $firstName;
	    $this->lastName = $lastName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactForm',[
        	'firstName' => $this->firstName,
        	'lastName' => $this->lastName
        ])->subject('More information about barber')->from(env('MAIL_FROM_ADDRESS'));
    }
}
