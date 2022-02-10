<?php

namespace App\Http\Livewire\Mails;

use App\Mail\productsContacUs;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ProductContactUs extends Component
{


    public $landingArea;
    public $nombre;
    public $celular;
    public $mail;
    public $contacto;


    protected $listeners = [
        'landingArea'
   ];


    public function landingArea($value1)
    {
        if(!is_null($value1))
        $this->landingArea = $value1;
          
    }

    public function productContactUs(){
        Mail::to('servicioalcliente@easydot.com.pa')->send(new productsContacUs(
            $this->nombre, $this->celular, $this->mail, $this->contacto,$this->landingArea
        ));

        $this->nombre ='';
        $this->celular ='';
        $this->mail ='';
        $this->contacto='';
        $this->landingArea='';
        
    }
    

    public function render()
    {
        return view('livewire.mails.product-contact-us');
    }
}