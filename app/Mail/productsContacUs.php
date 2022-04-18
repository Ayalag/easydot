<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class productsContacUs extends Mailable
{
    use Queueable, SerializesModels;

    protected $nombre;
    protected $celular;
    protected $mail;
    protected $contacto;
    protected $landingArea;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre,$celular,$mail,$contacto,$landingArea)
    {
        $this->nombre = $nombre;
        $this->celular = $celular;
        $this->mail = $mail;
        $this->contacto = $contacto;
        $this->landingArea = $landingArea;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('servicioalcliente@easydot.com.pa')
                    ->subject('gracias por contactarnos: '.$this->nombre)
                    ->markdown('emails.contactFromWebsite.ContactFromWebsite')->with([
                        'username' => $this->nombre,
                        'usercell' => $this->celular,
                        'usermail' => $this->mail,
                        'userpreferedContact' => $this->contacto,
                        'tipo' => $this->landingArea
                    ]);
    }
}