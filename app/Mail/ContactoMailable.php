<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject ="Informacion de contacto";


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tipo)
    {
        //

        switch ($tipo) {
            case 'registro':
               return $this->view('emails.bienvenida');
                break;
            case 'informacion':
                return $this->view('emails.informacion');
                break;
            default:
                # code...
                break;
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


    }
}
