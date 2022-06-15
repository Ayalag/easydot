<?php

namespace App\Http\Livewire\Productos\Dental;

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

    public $term1;
    public $term2;

    public $cedulaFoto;

    public $data_pk_id;
    public $tipo_id;
    public $tipo_name;
    public $plan_name;
    public $valor;

    public $show = false;
    public $showPais = false;

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
        $this->provincia = provincia::all();
    }

    public function updatedSelectedProvincia($id_provincia){

        $this->distrito = distrito::where('id_provincia',$id_provincia)->get();
    }
        
    public function updatedSelectedDistrito($id_distrito){

        $this->corregimiento = corregimiento::where('id_distrito',$id_distrito)->get();
        
    }


    public function validateData(){
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
                'term1' => 'required',
                'term2' => 'required',
                'cedulaFoto' => 'required | mimes:jpeg,jpg,png',
                'pais' =>  'required|string',
                'selectedProvincia' => 'required',
                'selectedDistrito' => 'required',
                'selectedCorregimiento' => 'required',
                'barrio' => 'required|string',
                'casa' => 'required|string',
                'celular' => 'required|string',
                'contactMail' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
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
                'term1' => 'required',
                'term2' => 'required',
                'cedulaFoto' => 'required | mimes:jpeg,jpg,png',
                'pais' =>  'required|string',
                'selectedProvincia' => 'required',
                'selectedDistrito' => 'required',
                'selectedCorregimiento' => 'required',
                'barrio' => 'required|string',
                'casa' => 'required|string',
                'celular' => 'required|string',
                'contactMail' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
             ]);
        }
    }


    // protected $rules = [
    //     'nombres' => ['required','regex:/^[a-zA-ZÑñ\s]+$/u'],
    //     'apellidos' => ['required','regex:/^[a-zA-ZÑñ\s]+$/u'],
    //     'typeId' => 'required|min:1',
    //     'identificacion' => ['required','regex:/^P$|^(?:PE|E|N|[23456789]|[23456789](?:A|P)?|1[0123]?|1[0123]?(?:A|P)?)$|^(?:PE|E|N|[23456789]|[23456789](?:AV|PI)?|1[0123]?|1[0123]?(?:AV|PI)?)-?$|^(?:PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(?:\d{1,4})-?$|^(PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(\d{1,4})-(\d{1,6})$/i'],
    //     'dia' => 'required|numeric',
    //     'mes' => 'required|numeric',
    //     'año' => 'required|numeric',
    //     'genero' => 'required|min:1',
    //     'eCivil' => 'required|string',
    //     'term1' => 'required',
    //     'term2' => 'required',
    //     'cedulaFoto' => 'required | mimes:jpeg,jpg,png',
    //     'pais' => 'required_if:typeId,==,pasaporte',
    //     'selectedProvincia' => 'required',
    //     'selectedDistrito' => 'required',
    //     'selectedCorregimiento' => 'required',
    //     'barrio' => 'required|string',
    //     'casa' => 'required|string',
    //     'celular' => 'required|string',
    //     'contactMail' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
    // ];

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

            $newOrderInsert->info_pk_id_insurance =$this->data_pk_id;
            $newOrderInsert->info_tipo_id =$this->tipo_id;
            $newOrderInsert->info_valor =$this->valor;
    
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
        return view('livewire.productos.dental.registro');
    }
}
