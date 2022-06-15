<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactFormFromKnowUs extends Mailable
{
    use Queueable, SerializesModels;

    protected $nombre;
    protected $celular;
    protected $mail;
    protected $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre,$celular,$mail,$mensaje)
    {
        $this->nombre = $nombre;
        $this->celular = $celular;
        $this->mail = $mail;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->mail)
                    ->subject('Gracias por contactarnos: '.$this->nombre)
                    ->markdown('emails.contactFromWebsite.ContactFromWebsite')->with([
                        'username' => $this->nombre,
                        'usercell' => $this->celular,
                        'usermail' => $this->mail,
                        'usermessage' => $this->mensaje
                    ]);
    }
}