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
    public $tipo;

    public function contactUs(){


        try{
            Mail::to([$this->mail,'servicioalcliente@easydot.com.pa'])->send(new contactFormFromKnowUs(
                $this->nombre, $this->celular, $this->mail, $this->mensaje
            ));
    
            $this->nombre ='';
            $this->celular ='';
            $this->mail ='';
            $this->mensaje='';

            session()->flash('success','Solicitud enviada');
        } 
        catch(\Error $ex){
            session()->flash('error','Error intentenuevamente');
        }  

    }
    
    public function render()
    {
        return view('livewire.mails.contact-us');
    }
}