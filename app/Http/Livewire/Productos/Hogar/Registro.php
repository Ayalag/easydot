<?php

namespace App\Http\Livewire\Productos\Hogar;

use Livewire\Component;
use App\Models\distrito;
use App\Models\provincia;
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

    public $provincia2;
    public $distrito2;
    public $corregimiento2;

    public $selectedProvincia = null;
    public $selectedDistrito = null;
    public $selectedCorregimiento = null;

    public $selectedProvincia2 = null;
    public $selectedDistrito2 = null;
    public $selectedCorregimiento2 = null;

    public $barrio2;
    public $casa2;

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

    public $sameaddress;

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

    public $data_pk_id;
    public $tipo_id;
    public $tipo_name;
    public $plan_name;
    public $valor;

    public $showAddress = false;
    public $showPais = false;

    public $userAddress;

    public $totalSteps = 2;
    public $currentStep = 1;

    public $showppe = false;
    public $showppeend = false;

    protected $listeners = [
        'getInfoInsuranceHogar'
    ];

    public function mount(){
        $this->currentStep = 2;
        $this->provincia = provincia::all();
        $this->provincia2 = provincia::all();
        if(Auth::check()){
            if( !empty(auth()->user()->address[0]->user_pais) 
            and !empty(auth()->user()->address[0]->user_provincia)
            and !empty(auth()->user()->address[0]->user_distrito) 
            and !empty(auth()->user()->address[0]->user_corregimiento)  
            and !empty(auth()->user()->address[0]->user_barrio)
            and !empty(auth()->user()->address[0]->user_apto_casa))
            {
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
    public function updatedSelectedProvincia2 ($id_provincia){

        $this->distrito2 = distrito::where('id_provincia',$id_provincia)->get();
    }
        
    public function updatedSelectedDistrito2 ($id_distrito){

        $this->corregimiento2 = corregimiento::where('id_distrito',$id_distrito)->get();
        
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

            if(Auth::check()){
            $this->validate([
                'sameaddress' => 'required|min:1',
            ]);
        }

            if(Auth::check()){
                if( !empty(auth()->user()->address[0]->user_pais) 
                and !empty(auth()->user()->address[0]->user_provincia)
                and !empty(auth()->user()->address[0]->user_distrito) 
                and !empty(auth()->user()->address[0]->user_corregimiento)  
                and !empty(auth()->user()->address[0]->user_barrio)
                and !empty(auth()->user()->address[0]->user_apto_casa)
                and $this->sameaddress == 'no_address')
                {
                    $this->validate([
                        'barrio2' => 'required|string',
                        'casa2' => 'required|string',
                        'selectedProvincia2' => 'required',
                        'selectedDistrito2' => 'required',
                        'selectedCorregimiento2' => 'required',
                        'term1' => 'required',
                        'term2' => 'required',
                    ]);
                }
            }else{
                $this->validate([
                    'barrio2' => 'required|string',
                    'casa2' => 'required|string',
                    'selectedProvincia2' => 'required',
                    'selectedDistrito2' => 'required',
                    'selectedCorregimiento2' => 'required',
                    'term1' => 'required',
                    'term2' => 'required',
                ]);
            }
        }
    }

    public function submit(){

        $this->validateData();

        $extension = $this->cedulaFoto->getClientOriginalExtension();

        $filePath = $this->cedulaFoto->storeAs('public/cedulas',$this->identificacion.'.'.$extension);

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

        $newOrderInsert->ppe = $this->ppe;
        $newOrderInsert->ppe_cargo = $this->ppecargo;
        $newOrderInsert->ppe_mail = $this->ppemail;
        $newOrderInsert->ppe_inicio_dia = $this->ppe_inicio_dia;
        $newOrderInsert->ppe_inicio_mes = $this->ppe_inicio_mes;
        $newOrderInsert->ppe_inicio_year = $this->ppe_inicio_año;
        $newOrderInsert->ppe_fin_dia = $this->ppe_final_dia;
        $newOrderInsert->ppe_fin_mes = $this->ppe_final_mes;
        $newOrderInsert->ppe_fin_year =$this->ppe_final_año;

        if(Auth::check()){
            if( !empty(auth()->user()->address[0]->user_pais) 
            and !empty(auth()->user()->address[0]->user_provincia)
            and !empty(auth()->user()->address[0]->user_distrito) 
            and !empty(auth()->user()->address[0]->user_corregimiento)  
            and !empty(auth()->user()->address[0]->user_barrio)
            and !empty(auth()->user()->address[0]->user_apto_casa)
            and $this->sameaddress == 'yes_address')
            {
                $newOrderInsert->hogar_prov = auth()->user()->address[0]->user_provincia;
                $newOrderInsert->hogar_dist = auth()->user()->address[0]->user_distrito;
                $newOrderInsert->hogar_barrio = auth()->user()->address[0]->user_barrio;
                $newOrderInsert->hogar_casApto = auth()->user()->address[0]->user_apto_casa;
                $newOrderInsert->hogar_corr = auth()->user()->address[0]->user_corregimiento;
            }else{
                $newOrderInsert->hogar_prov = $this->selectedProvincia2 ;
                $newOrderInsert->hogar_dist = $this->selectedDistrito2;
                $newOrderInsert->hogar_barrio = $this->barrio2;
                $newOrderInsert->hogar_casApto = $this->casa2;
                $newOrderInsert->hogar_corr = $this->selectedCorregimiento2;
            }
        }else{
            $newOrderInsert->hogar_prov = $this->selectedProvincia2 ;
            $newOrderInsert->hogar_dist = $this->selectedDistrito2;
            $newOrderInsert->hogar_barrio = $this->barrio2;
            $newOrderInsert->hogar_casApto = $this->casa2;
            $newOrderInsert->hogar_corr = $this->selectedCorregimiento2;
        }

        $newOrderInsert->info_pk_id_insurance =$this->data_pk_id;
        $newOrderInsert->info_tipo_id =$this->tipo_id;
        $newOrderInsert->info_valor =$this->valor;


        Auth::check() ? $newOrderInsert->register_user_id = Auth::user()->id : $newOrderInsert->register_user_id = null;

        $newOrderInsert->save();

        $order = $newOrderInsert->id;
        
        $PaymentWeb =  payeasy($this->valor, $this->plan_name, $order, $this->tipo_id, $this->contactMail);
        $PaymentWeb = json_decode($PaymentWeb);

        pendingOrders::where('id',$order)
        ->update(['Payment_url'=>$PaymentWeb->data->url]);

        return redirect()->to($PaymentWeb->data->url);
    }

    public function render()
    {
        return view('livewire.productos.hogar.registro');
    }
}
