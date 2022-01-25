<?php

namespace App\Http\Livewire\Productos\Motor;

use Livewire\Component;

class Registro extends Component
{

    public $placa;
    public $marca;
    public $modelo;
    public $year;
    public $color;
    public $motorNum;
    public $chasisNum;

    public $seguro;
    public $tipo;
    public $valor;

    protected $listeners = [
        'getInfoInsurance'
    ];


    public function getInfoInsurance($value1, $value2, $value3)
    {
        if(!is_null($value1))
            $this->seguro = $value1;
            $this->tipo = $value2;
            $this->valor = $value3;
        
    }
    public function submit(){
  
        $PaymentWeb =  payeasy( $this->valor, $this->seguro);

        $PaymentWeb = json_decode($PaymentWeb);

        return redirect()->to($PaymentWeb->data->url);

    }
    
    public function render()
    {
        return view('livewire.productos.motor.registro');
    }
}