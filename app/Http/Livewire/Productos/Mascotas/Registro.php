<?php

namespace App\Http\Livewire\Productos\Mascotas;

use Livewire\Component;

class Registro extends Component
{


    public $seguro;
    public $tipo;
    public $valor;
    public $clase;

    protected $listeners = [
        'getInfoInsuranceVet'
    ];


    public function getInfoInsuranceVet($value1, $value2, $value3, $value4)
    {
        if(!is_null($value1))
            $this->seguro = $value1;
            $this->tipo = $value2;
            $this->valor = $value3;
            $this->clase = $value4;
        
    }

    public function submit(){
  
        $PaymentWeb =  payeasy( $this->valor, $this->seguro);

        $PaymentWeb = json_decode($PaymentWeb);

        return redirect()->to($PaymentWeb->data->url);

    }


    public function render()
    {
        return view('livewire.productos.mascotas.registro');
    }
}