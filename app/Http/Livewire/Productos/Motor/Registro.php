<?php

namespace App\Http\Livewire\Productos\Motor;

use Livewire\Component;
use App\Models\distrito;
use App\Models\MotoTipo;
use App\Models\CarroTipo;
use App\Models\MotoMarca;
use App\Models\provincia;
use App\Models\CarroMarca;
use App\Models\corregimiento;
use App\Models\pendingOrders;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Registro extends Component
{
    use WithFileUploads;

    public $provincia;
    public $distrito;
    public $corregimiento;

    public $carBrand;
    public $carType;

    public $selectedCarBrand = null;
    public $selectedCarType = null;

    public $selectedProvincia = null;
    public $selectedDistrito = null;
    public $selectedCorregimiento = null;

    public $nombres;
    public $apellidos;
    public $typeId;
    public $identificacion;
    public $dia;
    public $mes;
    public $año;
    public $eCivil;
    public $pais;
    public $genero;
    public $barrio;
    public $casa;
    public $celular;
    public $contactMail;

    public $ppe;
    public $ppe_activo;
    public $ppecargo;
    public $ppemail;
    public $ppe_inicio_dia;
    public $ppe_inicio_mes;
    public $ppe_inicio_año;
    public $ppe_final_dia;
    public $ppe_final_mes;
    public $ppe_final_año;

    public $term1;
    public $term2;
    
    public $cedulaFoto;
    public $registroVehicular;

    public $placa;
    public $marca;
    public $modelo;
    public $year;
    public $color;
    public $motorNum;
    public $chasisNum;

    public $autoMoto ='auto';
    
    public $tipo_id;
    public $aseguradora_id;
    public $aseguradora_name;
    public $plan_id;
    public $plan_name;
    public $valor;

    public $totalSteps = 2;
    public $currentStep = 1;
    public $show = false;
    public $showPais = false;

    
    public $showppe = false;
    public $showppeend = false;

    protected $listeners = [
        'getMotorPlanDetail',
    ];

    
    public function getAutoMoto($value1)
    {
        if(!is_null($value1))
        $this->autoMoto = $value1; 
    }

    public function mount(){
        $this->currentStep = 1;
        $this->provincia = provincia::all();
    }

    public function hydrate()
    {
        if($this->tipo_id == 1){
            $this->carBrand= CarroMarca::all();
        }else{
            $this->carBrand= MotoMarca::all();
        }
    }

    public function updatedSelectedProvincia($id_provincia){

        $this->distrito = distrito::where('id_provincia',$id_provincia)->get();
    }
        
    public function updatedSelectedDistrito($id_distrito){

        
        $this->corregimiento = corregimiento::where('id_distrito',$id_distrito)->get();

    }

    public function updatedSelectedCarBrand($id_marca){

        if($this->tipo_id == 1){
             $this->carType = CarroTipo::where('id_Marca',$id_marca)->get();
        }else{
            $this->carType = MotoTipo::where('id_Marca',$id_marca)->get();
        }
        
    }

    public function increaseStep(){
        $this->validateData();
        $this->currentStep++;
        
        return $this->currentStep;
    }

    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([ 
                'nombres' => ['required','regex:/^[a-zA-ZÑñ\s]+$/u'],
                'apellidos' => ['required','regex:/^[a-zA-ZÑñ\s]+$/u'],
                'typeId' => 'required|min:1',
                'identificacion' => ['required','regex:/^P$|^(?:PE|E|N|[23456789]|[23456789](?:A|P)?|1[0123]?|1[0123]?(?:A|P)?)$|^(?:PE|E|N|[23456789]|[23456789](?:AV|PI)?|1[0123]?|1[0123]?(?:AV|PI)?)-?$|^(?:PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(?:\d{1,4})-?$|^(PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(\d{1,4})-(\d{1,6})$/i'],
                'dia' => 'required|numeric',
                'mes' => 'required|numeric',
                'año' => 'required|numeric',
                'genero' => 'required|min:1',
                'eCivil' => 'required|string',
                'cedulaFoto' => 'required | mimes:jpeg,jpg,png',
                'pais' => 'required_if:typeId,==,pasaporte',
                'selectedProvincia' => 'required',
                'selectedDistrito' => 'required',
                'selectedCorregimiento' => 'required',
                'barrio' => 'required|string',
                'casa' => 'required|string',
                'celular' => 'required|string',
                'contactMail' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'ppe' => 'required|min:1',
                'ppecargo' => 'required_if:ppe,==,ppeSi',
                'ppe_inicio_dia' => 'required_if:ppe,==,ppeSi',
                'ppe_inicio_mes' => 'required_if:ppe,==,ppeSi',
                'ppe_inicio_año' => 'required_if:ppe,==,ppeSi',
                'ppe_activo' => 'required_if:ppe,==,ppeSi',
                'ppe_final_dia' => 'required_if:ppe_activo,==,no',
                'ppe_final_mes' => 'required_if:ppe_activo,==,no',
                'ppe_final_año' => 'required_if:ppe_activo,==,no',
            ]);
        }

        if($this->currentStep == 2){
            $this->validate([

                'placa' => ['required','regex:/^[a-zA-Z0-9]+$/u'],
                'selectedCarBrand' => 'required|string',
                'selectedCarType' => 'required|string',
                'year' => 'required',
                'color' => 'required|string',
                'motorNum' => 'required|string',
                'chasisNum' => 'required|string',
                'registroVehicular' => 'required | mimes:jpeg,jpg,png',
                'term1' => 'required',
                'term2' => 'required',
            ]);
        }
    }

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

        $this->validateData();
        // $this->validaPpe();

        $extension = $this->cedulaFoto->getClientOriginalExtension();
        $regVehiculo = $this->registroVehicular->getClientOriginalExtension();

        $filePath = $this->cedulaFoto->storeAs('public/cedulas',$this->identificacion.'.'.$extension);
        $filePathregVehicular = $this->registroVehicular->storeAs('public/registros/vehiculos',$this->identificacion.'_'.$this->placa.'.'.$regVehiculo);

        $newOrderInsert = new pendingOrders;

        $newOrderInsert->nombre = $this->nombres;
        $newOrderInsert->apellido = $this->apellidos;
        $newOrderInsert->id_type = $this->typeId;
        $newOrderInsert->identificacion = $this->identificacion;
        $newOrderInsert->dia = $this->dia;
        $newOrderInsert->mes = $this->mes;
        $newOrderInsert->year = $this->año;
        $newOrderInsert->estado_civil = $this->eCivil;
        $newOrderInsert->pais = $this->pais;
        $newOrderInsert->genero = $this->genero;
        $newOrderInsert->barrio = $this->barrio;
        $newOrderInsert->casa = $this->casa;
        $newOrderInsert->celular = $this->celular;
        $newOrderInsert->contactMail = $this->contactMail;
        $newOrderInsert->provincia = $this->selectedProvincia;
        $newOrderInsert->distrito = $this->selectedDistrito;
        $newOrderInsert->corregimiento = $this->selectedCorregimiento;
        $newOrderInsert->foto_ced_pas = $filePath;
        $newOrderInsert->foto_registro_vehicular = $filePathregVehicular;

        $newOrderInsert->ppe = $this->ppe;
        $newOrderInsert->ppe_cargo = $this->ppecargo;
        $newOrderInsert->ppe_mail = $this->ppemail;
        $newOrderInsert->ppe_inicio_dia = $this->ppe_inicio_dia;
        $newOrderInsert->ppe_inicio_mes = $this->ppe_inicio_mes;
        $newOrderInsert->ppe_inicio_year = $this->ppe_inicio_año;
        $newOrderInsert->ppe_fin_dia = $this->ppe_final_dia;
        $newOrderInsert->ppe_fin_mes = $this->ppe_final_mes;
        $newOrderInsert->ppe_fin_year =$this->ppe_final_año;

        $newOrderInsert->placa = $this->placa;
        $newOrderInsert->marca = $this->selectedCarBrand;
        $newOrderInsert->modelo = $this->selectedCarType;
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
        
        $PaymentWeb =  payeasy($this->valor, $this->plan_name, $order, $this->tipo_id,$this->contactMail);
        $PaymentWeb = json_decode($PaymentWeb);

        pendingOrders::where('id',$order)
        ->update(['Payment_url'=>$PaymentWeb->data->url]);

        return redirect()->to($PaymentWeb->data->url);
    }
    
    public function render()
    {
        return view('livewire.productos.motor.registro');
    }
}