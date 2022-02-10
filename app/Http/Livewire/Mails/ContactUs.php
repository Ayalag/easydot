<?php

namespace App\Http\Livewire\Mails;

use Livewire\Component;
use App\Mail\contactFormFromKnowUs;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Component
{

    public $nombre;
    public $celular;
    public $mail;
    public $mensaje;

    public function contactUs(){

        Mail::to('servicioalcliente@easydot.com.pa')->send(new contactFormFromKnowUs(
            $this->nombre, $this->celular, $this->mail, $this->mensaje
        ));

        $this->nombre ='';
        $this->celular ='';
        $this->mail ='';
        $this->mensaje='';
        
    }
    
    public function render()
    {
        return view('livewire.mails.contact-us');
    }
}