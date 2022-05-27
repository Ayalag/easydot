<?php

namespace App\Http\Livewire\Productos\Persona;

use Livewire\Component;
use App\Models\distrito;
use App\Models\provincia;
use App\Models\corregimiento;
use App\Models\pendingOrders;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class RegistroErm extends Component
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

    // ADITIONAL PERSON

    public $aditionalPerson;
    public $ap_nombres;
    public $ap_apellidos;
    public $ap_typeId;
    public $ap_identificacion;
    public $ap_dia;
    public $ap_mes;
    public $ap_año;
    public $ap_eCivil;
    public $ap_pais;
    public $ap_genero;
    public $ap_barrio;
    public $ap_casa;
    public $ap_celular;
    public $ap_contactMail;

    public $ap_ppe;
    public $ap_ppe_activo;
    public $ap_ppecargo;
    public $ap_ppemail;
    public $ap_ppe_inicio_dia;
    public $ap_ppe_inicio_mes;
    public $ap_ppe_inicio_año;
    public $ap_ppe_final_dia;
    public $ap_ppe_final_mes;
    public $ap_ppe_final_año;

    // ADITIONAL PERSON


    public $term1;
    public $term2;

    public $cedulaFoto;
    public $ap_cedulaFoto;

    public $data_pk_id;
    public $tipo_id;
    public $tipo_name;
    public $plan_name;
    public $valor;

    public $totalSteps = 2;
    public $currentStep = 1;
    public $show = false;
    public $showPais = false;

    public $showppe = false;
    public $ap_showppe = false;
    public $showaditionalPerson = false;
    public $showppeend = false;
    public $ap_showppeend = false;

    protected $listeners = [
        'getPersonaPlanDetail'
    ];

    public function getPersonaPlanDetail($value1, $value2, $value3, $value4, $value5)
    {
        if(!is_null($value1)){
            $this->data_pk_id = $value1;
            $this->tipo_id = $value2;
            $this->tipo_name = $value3;
            $this->plan_name = $value4;
            $this->valor = $value5;
        }
    }

    public function mount(){
        $this->currentStep = 1;
        $this->provincia = provincia::all();
        $this->provincia2 = provincia::all();
    }

    public function updatedSelectedProvincia($id_provincia){

        $this->distrito = distrito::where('id_provincia',$id_provincia)->get();
    }
        
    public function updatedSelectedDistrito($id_distrito){

        $this->corregimiento = corregimiento::where('id_distrito',$id_distrito)->get();
    }

    public function updatedSelectedProvincia2($id_provincia){
        $this->distrito2 = distrito::where('id_provincia',$id_provincia)->get();
    }
        
    public function updatedSelectedDistrito2($id_distrito){
        $this->corregimiento2 = corregimiento::where('id_distrito',$id_distrito)->get();
    }

    public function increaseStep(){
        $this->validateData();
        $this->currentStep++;
        
        return $this->currentStep;
    }

    public function validateData(){
        if($this->currentStep == 1){
            if($this->typeId =='cedula'){
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
            }else{
                $this->validate([ 
                    'nombres' => ['required','regex:/^[a-zA-ZÑñ\s]+$/u'],
                    'apellidos' => ['required','regex:/^[a-zA-ZÑñ\s]+$/u'],
                    'typeId' => 'required|min:1',
                    'identificacion' => 'required|string',
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
        }

        if($this->currentStep == 2){
            $this->validate([
                'aditionalPerson' => 'required|min:1',  
                'term1' => 'required',
                'term2' => 'required',   
            ]);
            if($this->aditionalPerson == 'si'){
                if($this->typeId =='cedula'){
                    $this->validate([ 
                        'ap_nombres' => ['required','regex:/^[a-zA-ZÑñ\s]+$/u'],
                        'ap_apellidos' => ['required','regex:/^[a-zA-ZÑñ\s]+$/u'],
                        'ap_typeId' => 'required|min:1',
                        'ap_identificacion' => ['required','regex:/^P$|^(?:PE|E|N|[23456789]|[23456789](?:A|P)?|1[0123]?|1[0123]?(?:A|P)?)$|^(?:PE|E|N|[23456789]|[23456789](?:AV|PI)?|1[0123]?|1[0123]?(?:AV|PI)?)-?$|^(?:PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(?:\d{1,4})-?$|^(PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(\d{1,4})-(\d{1,6})$/i'],
                        'ap_dia' => 'required|numeric',
                        'ap_mes' => 'required|numeric',
                        'ap_año' => 'required|numeric',
                        'ap_genero' => 'required|min:1',
                        'ap_eCivil' => 'required|string',
                        'ap_cedulaFoto' => 'required | mimes:jpeg,jpg,png',
                        'ap_pais' => 'required_if:typeId,==,pasaporte',
                        'selectedProvincia2' => 'required',
                        'selectedDistrito2' => 'required',
                        'selectedCorregimiento2' => 'required',
                        'ap_barrio' => 'required|string',
                        'ap_casa' => 'required|string',
                        'ap_celular' => 'required|string',
                        'ap_contactMail' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                        'ap_ppe' => 'required|min:1',
                        'ap_ppecargo' => 'required_if:ap_ppe,==,ap_ppeSi',
                        'ap_ppe_inicio_dia' => 'required_if:ap_ppe,==,ap_ppeSi',
                        'ap_ppe_inicio_mes' => 'required_if:ap_ppe,==,ap_ppeSi',
                        'ap_ppe_inicio_año' => 'required_if:ap_ppe,==,ap_ppeSi',
                        'ap_ppe_activo' => 'required_if:ap_ppe,==,ap_ppeSi',
                        'ap_ppe_final_dia' => 'required_if:ap_ppe_activo,==,no',
                        'ap_ppe_final_mes' => 'required_if:ap_ppe_activo,==,no',
                        'ap_ppe_final_año' => 'required_if:ap_ppe_activo,==,no',
                    ]);
                }else{
                    $this->validate([ 
                        'ap_nombres' => ['required','regex:/^[a-zA-ZÑñ\s]+$/u'],
                        'ap_apellidos' => ['required','regex:/^[a-zA-ZÑñ\s]+$/u'],
                        'ap_typeId' => 'required|min:1',
                        'ap_identificacion' => 'required|string',
                        'ap_dia' => 'required|numeric',
                        'ap_mes' => 'required|numeric',
                        'ap_año' => 'required|numeric',
                        'ap_genero' => 'required|min:1',
                        'ap_eCivil' => 'required|string',
                        'ap_cedulaFoto' => 'required | mimes:jpeg,jpg,png',
                        'ap_pais' => 'required_if:typeId,==,pasaporte',
                        'selectedProvincia2' => 'required',
                        'selectedDistrito2' => 'required',
                        'selectedCorregimiento2' => 'required',
                        'ap_barrio' => 'required|string',
                        'ap_casa' => 'required|string',
                        'ap_celular' => 'required|string',
                        'ap_contactMail' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                        'ap_ppe' => 'required|min:1',
                        'ap_ppecargo' => 'required_if:ap_ppe,==,ap_ppeSi',
                        'ap_ppe_inicio_dia' => 'required_if:ap_ppe,==,ap_ppeSi',
                        'ap_ppe_inicio_mes' => 'required_if:ap_ppe,==,ap_ppeSi',
                        'ap_ppe_inicio_año' => 'required_if:ap_ppe,==,ap_ppeSi',
                        'ap_ppe_activo' => 'required_if:ap_ppe,==,ap_ppeSi',
                        'ap_ppe_final_dia' => 'required_if:ap_ppe_activo,==,no',
                        'ap_ppe_final_mes' => 'required_if:ap_ppe_activo,==,no',
                        'ap_ppe_final_año' => 'required_if:ap_ppe_activo,==,no',
                    ]);
                }
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


            $newOrderInsert->info_pk_id_insurance =$this->data_pk_id;
            $newOrderInsert->info_tipo_id =$this->tipo_id;
            $newOrderInsert->info_valor =$this->valor;

            if($this->aditionalPerson == 'si'){
                
                $extensionApcedulas = $this->ap_cedulaFoto->getClientOriginalExtension();
                $filePathAp = $this->ap_cedulaFoto->storeAs('public/cedulas',$this->identificacion.'.'.$extensionApcedulas);

                $newOrderInsert->ap_nombre = $this->ap_nombres;
                $newOrderInsert->ap_apellido = $this->ap_apellidos;
                $newOrderInsert->ap_id_type = $this->ap_typeId;
                $newOrderInsert->ap_identificacion = $this->ap_identificacion;
                $newOrderInsert->ap_dia = $this->ap_dia;
                $newOrderInsert->ap_mes = $this->ap_mes;
                $newOrderInsert->ap_year = $this->ap_año;
                $newOrderInsert->ap_estado_civil = $this->ap_eCivil;
                $newOrderInsert->ap_pais = $this->ap_pais;
                $newOrderInsert->ap_genero = $this->ap_genero;
                $newOrderInsert->ap_barrio = $this->ap_barrio;
                $newOrderInsert->ap_casa = $this->ap_casa;
                $newOrderInsert->ap_celular = $this->ap_celular;
                $newOrderInsert->ap_contactMail = $this->ap_contactMail;
                $newOrderInsert->ap_provincia = $this->selectedProvincia2;
                $newOrderInsert->ap_distrito = $this->selectedDistrito2;
                $newOrderInsert->ap_corregimiento = $this->selectedCorregimiento2;
                $newOrderInsert->ap_foto_ced_pas = $filePathAp;
    
                $newOrderInsert->ap_ppe = $this->ap_ppe;
                $newOrderInsert->ap_ppe_cargo = $this->ap_ppecargo;
                $newOrderInsert->ap_ppe_mail = $this->ap_ppemail;
                $newOrderInsert->ap_ppe_inicio_dia = $this->ap_ppe_inicio_dia;
                $newOrderInsert->ap_ppe_inicio_mes = $this->ap_ppe_inicio_mes;
                $newOrderInsert->ap_ppe_inicio_year = $this->ap_ppe_inicio_año;
                $newOrderInsert->ap_ppe_fin_dia = $this->ap_ppe_final_dia;
                $newOrderInsert->ap_ppe_fin_mes = $this->ap_ppe_final_mes;
                $newOrderInsert->ap_ppe_fin_year =$this->ap_ppe_final_año;
            }
    
            Auth::check() ? $newOrderInsert->register_user_id = Auth::user()->id : $newOrderInsert->register_user_id = null;
    
            $newOrderInsert->save();
    
            $order = $newOrderInsert->id;
            
            $PaymentWeb =  payeasy($this->valor, $this->plan_name, $order, $this->tipo_id,$this->contactMail );
            $PaymentWeb = json_decode($PaymentWeb);
    
            pendingOrders::where('id',$order)
            ->update(['Payment_url'=>$PaymentWeb->data->url]);
    
            return redirect()->to($PaymentWeb->data->url);
        }
    public function render()
    {
        return view('livewire.productos.persona.registro-erm');
    }
}
