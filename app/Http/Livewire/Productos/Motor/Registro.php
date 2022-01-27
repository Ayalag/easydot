<?php

namespace App\Http\Livewire\Productos\Motor;

use App\Models\pendingOrders;
use Dotenv\Parser\Value;
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
    
    public $tipo_id;
    public $aseguradora_id;
    public $aseguradora_name;
    public $plan_id;
    public $plan_name;
    public $valor;




    protected $listeners = [
        'getMotorPlanDetail'
    ];


    public function getMotorPlanDetail($value1, $value2, $value3, $value4, $value5, $value6)
    {
        if(!is_null($value1))
        $this->tipo_id = $value1;
        $this->aseguradora_id = $value2;
        $this->aseguradora_name = $value3;
        $this->plan_id = $value4;
        $this->valor = $value5;
        $this->plan_name = $value6;
        
    }
    
    public function submit(){

        $newOrderInsert = new pendingOrders;

        $newOrderInsert->placa = $this->placa;
        $newOrderInsert->marca = $this->marca;
        $newOrderInsert->modelo = $this->modelo;
        $newOrderInsert->car_year = $this->year;
        $newOrderInsert->color = $this->color;
        $newOrderInsert->numero_de_motor = $this->motorNum;
        $newOrderInsert->numero_de_chasis = $this->chasisNum;
        $newOrderInsert->info_tipo_id = $this->tipo_id;
        $newOrderInsert->info_aseguradora_id = $this->aseguradora_id;
        $newOrderInsert->info_plan_id = $this->plan_id;
        $newOrderInsert->info_valor = $this->valor;

        $newOrderInsert->save();

        $order = $newOrderInsert->id;
  
        $PaymentWeb =  payeasy($this->valor, $this->plan_name, $order);

        $PaymentWeb = json_decode($PaymentWeb);

        return redirect()->to($PaymentWeb->data->url);

    }
    
    public function render()
    {
        return view('livewire.productos.motor.registro');
    }
}