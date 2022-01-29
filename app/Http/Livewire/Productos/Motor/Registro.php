<?php

namespace App\Http\Livewire\Productos\Motor;

use Livewire\Component;
use Dotenv\Parser\Value;
use Illuminate\Support\Arr;
use App\Models\pendingOrders;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Registro extends Component
{

    use WithFileUploads;

    public $file;

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

        $this->validate([
            'file' => 'required'
        ]);

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

        Auth::check() ? $newOrderInsert->register_user_id = Auth::user()->id : $newOrderInsert->register_user_id = null;

        $newOrderInsert->save();

        $order = $newOrderInsert->id;
        
        // $PaymentWeb =  payeasy($this->valor, $this->plan_name, $order);
        // $PaymentWeb = json_decode($PaymentWeb);

        // pendingOrders::where('id',$order)
        // ->update(['Payment_url'=>$PaymentWeb->data->url]);

        $orderget = pendingOrders::where('id',$order)
        ->get();

        $orderget["key3"] = "value3";

        dd($orderget);
        // return redirect()->to($PaymentWeb->data->url);
    }
    
    public function render()
    {
        return view('livewire.productos.motor.registro');
    }
}