<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class ContactSiteToAdmins extends Mailable
{
    use Queueable, SerializesModels;

    public $request; //funcion publica para que sea usada por toda la case


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $formRequest)
    {
        //data del request
        $this->request = $formRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Asunto') // obtenemos el asunto de la variable $request
        ->view('emails.notification'); //adminGiftNotification

    }
}
