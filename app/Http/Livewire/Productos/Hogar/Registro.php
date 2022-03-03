<?php

namespace App\Http\Livewire\Productos\Hogar;

use Livewire\Component;
use App\Models\distrito;
use App\Models\provincia;
use App\Models\corregimiento;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Registro extends Component
{
    use WithFileUploads;

    public $provincia;
    public $distrito;
    public $corregimiento;

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
    public $ppecargo;
    public $ppemail;
    public $ppe_inicio_dia;
    public $ppe_inicio_mes;
    public $ppe_inicio_año;
    public $ppe_final_dia;
    public $ppe_final_mes;
    public $ppe_final_año;
    
    public $file;

    public $data_pk_id;
    public $tipo_id;
    public $tipo_name;
    public $plan_name;
    public $valor;

    public $show = false;
    public $showPais = false;

    public $userAddress;

    public $totalSteps = 2;
    public $currentStep = 1;

    protected $listeners = [
        'getInfoInsuranceHogar'
    ];

    public function mount(){
        $this->currentStep = 2;
        $this->provincia = provincia::all();
        if(Auth::check()){
            if( auth()->user()->address[0]->user_pais){
                $this->userAddress = 'si';

            }else{
                $this->userAddress = 'no';
            }
        }else{
            $this->userAddress = 'no';
        }
    }

    public function updatedSelectedProvincia($id_provincia){

        $this->distrito = distrito::where('id_provincia',$id_provincia)->get();
    }
        
    public function updatedSelectedDistrito($id_distrito){

        $this->corregimiento = corregimiento::where('id_distrito',$id_distrito)->get();
        
    }

    
    public function getInfoInsuranceHogar($value1, $value2, $value3, $value4, $value5)
    {
        if(!is_null($value1)){
            $this->data_pk_id = $value1;
            $this->tipo_id = $value2;
            $this->tipo_name = $value3;
            $this->plan_name = $value4;
            $this->valor = $value5;
        }
        
    }

    public function increaseStep(){
        $this->validateData();
        $this->validaPpe();
        $this->currentStep++;

        return $this->currentStep;
    }

    public function validaPpe(){

        if($this->currentStep == 1){
            if($this->ppe == 'ppeSi'){
                $this->validate([
                    'ppecargo' => 'required|string',
                    'ppemail' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                    'ppe_inicio_dia' => 'required|numeric',
                    'ppe_inicio_mes' => 'required|numeric',
                    'ppe_inicio_año' => 'required|numeric',
                    'ppe_final_dia' => 'required|numeric',
                    'ppe_final_mes' => 'required|numeric',
                    'ppe_final_año' => 'required|numeric',
                 ]);
            }
        }
    }

    public function validateData(){
        if($this->currentStep == 1){

            if($this->typeId =='cedula'){
                $this->validate([
                    'nombres' => ['required','regex:/[a-zA-Z0-9\s]+/'],
                    'apellidos' => ['required','regex:/[a-zA-Z0-9\s]+/'],
                    'typeId' => 'required|min:1',
                    'identificacion' => ['required','regex:/^P$|^(?:PE|E|N|[23456789]|[23456789](?:A|P)?|1[0123]?|1[0123]?(?:A|P)?)$|^(?:PE|E|N|[23456789]|[23456789](?:AV|PI)?|1[0123]?|1[0123]?(?:AV|PI)?)-?$|^(?:PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(?:\d{1,4})-?$|^(PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(\d{1,4})-(\d{1,6})$/i'],
                    'dia' => 'required|numeric',
                    'mes' => 'required|numeric',
                    'año' => 'required|numeric',
                    'eCivil' => 'required|string',
                    'genero' => 'required|min:1',
                    'barrio' => 'required|string',
                    'casa' => 'required|string',
                    'celular' => 'required|string',
                    'contactMail' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                    'ppe' => 'required|min:1',
                ]);
            }
            else{
                $this->validate([
                    'nombres' => ['required','regex:/[a-zA-Z0-9\s]+/'],
                    'apellidos' => ['required','regex:/[a-zA-Z0-9\s]+/'],
                    'typeId' => 'required|min:1',
                    'identificacion' => 'required|string',
                    'dia' => 'required|string',
                    'mes' => 'required|string',
                    'año' => 'required|string',
                    'dia' => 'required|numeric',
                    'mes' => 'required|numeric',
                    'año' => 'required|numeric',
                    'eCivil' => 'required|string',
                    'pais' => 'required|string',
                    'genero' => 'required|min:1',
                    'barrio' => 'required|string',
                    'casa' => 'required|string',
                    'celular' => 'required|string',
                    'contactMail' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                    'ppe' => 'required|min:1',
                    
                ]);
            } 
        }
        if($this->currentStep == 2){
            $this->validate([

                // 'placa' => ['required','regex:/[a-zA-Z0-9\s]+/'],
                // 'selectedCarBrand' => 'required|string',
                // 'selectedCarType' => 'required|string',
                // 'year' => 'required|string',
                // 'color' => 'required|string',
                // 'motorNum' => 'required|string',
                // 'chasisNum' => 'required|string',
            ]);
        }
    }


    public function render()
    {
        return view('livewire.productos.hogar.registro');
    }
}
