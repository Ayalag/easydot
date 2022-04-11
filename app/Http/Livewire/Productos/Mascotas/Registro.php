<?php

namespace App\Http\Livewire\Productos\Mascotas;

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
    
    public $cedulaFoto;
    public $mascota1Foto;
    public $mascota2Foto;
    public $mascota3Foto;

    public $mascotaTipo;
    public $mascotaNombre;
    public $mascotaRaza;
    public $mascotaNacDay;
    public $mascotaNacMonth;
    public $mascotaNacYear;
    public $mascotaSexo;
    public $mascotaValor;
    public $nombreClinica;
    public $telefonoClinica;
    public $direccionClinica;
    public $Mascotafoto1;
    public $Mascotafoto2;
    public $Mascotafoto3;

    public $data_pk_id;
    public $tipo_id;
    public $tipo_name;
    public $plan_name;
    public $valor;

    public $totalSteps = 2;
    public $currentStep = 1;
    public $show = false;
    public $showPais = false;

    public $dogSelected = false;
    public $catSelected = false;

    public $showppe = false;
    public $showppeend = false;

    protected $listeners = [
        'getInfoInsuranceVet'
    ];

    public function petDropdown($pet){
        if ($pet === 'dog'){
            $this->dogSelected = true;
            $this->catSelected = false;

        }
        if ($pet === 'cat'){
            $this->dogSelected = false;
            $this->catSelected = true;

        }
    }

    public function getInfoInsuranceVet($value1, $value2, $value3, $value4, $value5)
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
    }

    public function updatedSelectedProvincia($id_provincia){

        $this->distrito = distrito::where('id_provincia',$id_provincia)->get();
    }
        
    public function updatedSelectedDistrito($id_distrito){

        $this->corregimiento = corregimiento::where('id_distrito',$id_distrito)->get();
        
    }

    public function increaseStep(){
        $this->validateData();
        $this->validaPpe();
        $this->currentStep++;

        return $this->currentStep;
    }

    public function validaPpe(){
        if($this->ppe == 'ppeSi'){
            $this->validate([
                'ppe_activo' =>'required|min:1',
                ]);
        }
        if($this->ppe == 'ppeSi'){
            if($this->ppe_activo  == 'si'){
                $this->validate([
                    'ppecargo' => 'required|string',
                    // 'ppemail' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                    'ppe_inicio_dia' => 'required|numeric',
                    'ppe_inicio_mes' => 'required|numeric',
                    'ppe_inicio_año' => 'required|numeric',
                    'ppe_activo' =>'required|min:1',
                    ]);
            }else{
                $this->validate([
                    'ppecargo' => 'required|string',
                    // 'ppemail' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                    'ppe_inicio_dia' => 'required|numeric',
                    'ppe_inicio_mes' => 'required|numeric',
                    'ppe_inicio_año' => 'required|numeric',
                    'ppe_final_dia' => 'required|numeric',
                    'ppe_final_mes' => 'required|numeric',
                    'ppe_final_año' => 'required|numeric',
                    'ppe_activo' =>'required|min:1',
                    ]);
            }
        }
    }

    public function validateData(){

        if($this->currentStep == 1){

            if($this->typeId =='cedula'){
                $this->validate([
                    'nombres' => ['required','regex:/^[a-zA-Z]+$/u'],
                    'apellidos' => ['required','regex:/^[a-zA-Z]+$/u'],
                    'typeId' => 'required|min:1',
                    'identificacion' => ['required','regex:/^P$|^(?:PE|E|N|[23456789]|[23456789](?:A|P)?|1[0123]?|1[0123]?(?:A|P)?)$|^(?:PE|E|N|[23456789]|[23456789](?:AV|PI)?|1[0123]?|1[0123]?(?:AV|PI)?)-?$|^(?:PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(?:\d{1,4})-?$|^(PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(\d{1,4})-(\d{1,6})$/i'],
                    'dia' => 'required|numeric',
                    'mes' => 'required|numeric',
                    'año' => 'required|numeric',
                    'eCivil' => 'required|string',
                    'selectedProvincia' => 'required',
                    'selectedDistrito' => 'required',
                    'selectedCorregimiento' => 'required',
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
                    'nombres' => ['required','regex:/^[a-zA-Z]+$/u'],
                    'apellidos' => ['required','regex:/^[a-zA-Z]+$/u'],
                    'typeId' => 'required|min:1',
                    'identificacion' => 'required|string',
                    'dia' => 'required|numeric',
                    'mes' => 'required|numeric',
                    'año' => 'required|numeric',
                    'eCivil' => 'required|string',
                    'selectedProvincia' => 'required',
                    'selectedDistrito' => 'required',
                    'selectedCorregimiento' => 'required',
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

                    'mascotaTipo' => 'required|min:1',
                    'mascotaNombre' => ['required','regex:/^[a-zA-Z]+$/u'],
                    'mascotaRaza' => ['required','regex:/^[a-zA-Z]+$/u'],
                    'mascotaNacDay' => 'required',
                    'mascotaNacMonth' => 'required',
                    'mascotaNacYear' => 'required',
                    'mascotaSexo' => 'required|string',
                    'mascotaValor' => 'required|numeric',  
                    'telefonoClinica' => 'numeric',
                    'mascota1Foto' => 'required | mimes:jpeg,jpg,png',
                    'mascota2Foto' => 'required | mimes:jpeg,jpg,png',
                    'mascota3Foto' => 'required | mimes:jpeg,jpg,png',

                ]);
            }
        }

    public function submit(){
  
        $this->validateData();
        $this->validaPpe();

        $extension = $this->cedulaFoto->getClientOriginalExtension();
        $extensionMascota1 = $this->mascota1Foto->getClientOriginalExtension();
        $extensionMascota2 = $this->mascota2Foto->getClientOriginalExtension();
        $extensionMascota3 = $this->mascota3Foto->getClientOriginalExtension();

        $filePath = $this->cedulaFoto->storeAs('public/cedulas',$this->identificacion.'.'.$extension);

        $filePathMascota1 = $this->mascota1Foto->storeAs('public/mascotas',$this->identificacion.'_'.$this->mascotaNombre.'_'.'1'.'.'.$extensionMascota1);
        $filePathMascota2 = $this->mascota2Foto->storeAs('public/mascotas',$this->identificacion.'_'.$this->mascotaNombre.'_'.'2'.'.'.$extensionMascota2);
        $filePathMascota3 = $this->mascota3Foto->storeAs('public/mascotas',$this->identificacion.'_'.$this->mascotaNombre.'_'.'3'.'.'.$extensionMascota3);

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
        $newOrderInsert->foto_mascota_1 = $filePathMascota1;
        $newOrderInsert->foto_mascota_2 = $filePathMascota2;
        $newOrderInsert->foto_mascota_3 = $filePathMascota3;

        $newOrderInsert->ppe = $this->ppe;
        $newOrderInsert->ppe_cargo = $this->ppecargo;
        $newOrderInsert->ppe_mail = $this->ppemail;
        $newOrderInsert->ppe_inicio_dia = $this->ppe_inicio_dia;
        $newOrderInsert->ppe_inicio_mes = $this->ppe_inicio_mes;
        $newOrderInsert->ppe_inicio_year = $this->ppe_inicio_año;
        $newOrderInsert->ppe_fin_dia = $this->ppe_final_dia;
        $newOrderInsert->ppe_fin_mes = $this->ppe_final_mes;
        $newOrderInsert->ppe_fin_year =$this->ppe_final_año;

        $newOrderInsert->raza_tipo =$this->mascotaTipo;
        $newOrderInsert->nombre_mascota =$this->mascotaNombre;
        $newOrderInsert->raza =$this->mascotaRaza;
        $newOrderInsert->mascotaNacDay =$this->mascotaNacDay;
        $newOrderInsert->mascotaNacMonth =$this->mascotaNacMonth;
        $newOrderInsert->mascotaNacYear =$this->mascotaNacYear;
        $newOrderInsert->mascotaSexo =$this->mascotaSexo;
        $newOrderInsert->valor =$this->mascotaValor;

        $newOrderInsert->nombre_clinica	 =$this->nombreClinica;
        $newOrderInsert->telefono_clinica =$this->telefonoClinica;
        $newOrderInsert->direccion_clinica =$this->direccionClinica;

        $newOrderInsert->info_pk_id_insurance =$this->data_pk_id;
        $newOrderInsert->info_tipo_id =$this->tipo_id;
        $newOrderInsert->info_valor =$this->valor;

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
        return view('livewire.productos.mascotas.registro');
    }
}
