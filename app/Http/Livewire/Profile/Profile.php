<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use App\Models\distrito;
use App\Models\provincia;
use App\Models\corregimiento;
use App\Models\UserInfoDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{

    public $nombres;
    public $apellidos;
    public $identificacion;
    public $typeId;

    public $dia;
    public $mes;
    public $año;

    public $pais;
    public $eCivil;
    public $genero;
    public $celular;
    public $contactMail;

    public $provincia;
    public $distrito;
    public $corregimiento;

    public $provincia_user_id;
    public $distrito_user_id;
    public $corregimiento_user_id;

    public $provincia_user;
    public $distrito_user;
    public $corregimiento_user;
    public $casa;
    public $barrio;

    public $selectedProvincia = null;
    public $selectedDistrito = null;
    public $selectedCorregimiento = null;



    public function mount(){

        if(Auth::check()){
            $this->nombres = Auth::user()->name;
            $this->apellidos = Auth::user()->lastname;
            $this->contactMail =Auth::user()->email;
            if(!auth()->user()->address->isEmpty()){
                $response = DB::select('call user_info_detail(?)',[Auth::user()->id]);

                $this->identificacion = $response[0]->user_id_number;
                $this->typeId = $response[0]->user_id_type;
                $this->genero = $response[0]->user_genero;
        
                $this->dia = $response[0]->user_day_birthday;
                $this->mes = $response[0]->user_month_birthday;
                $this->año = $response[0]->user_year_birthday;
        
                $this->pais = $response[0]->user_pais;
                $this->eCivil = $response[0]->user_ecivil;
                $this->celular = $response[0]->user_celular;
                
        
                $this->provincia_user = $response[0]->Nombre_Provincia;
                $this->distrito_user = $response[0]->nombre_distrito;
                $this->corregimiento_user = $response[0]->nombre_corregimiento;
        
                $this->provincia_user_id = $response[0]->id_Provincia;
                $this->distrito_user_id = $response[0]->id_distrito;
                $this->corregimiento_user_id = $response[0]->id_corregimiento;
        
                $this->casa = $response[0]->user_apto_casa;
                $this->barrio = $response[0]->user_barrio;
            }
        }

        $this->provincia = provincia::all();
    }

    public function updatedSelectedProvincia($id_provincia){

        $this->distrito = distrito::where('id_provincia',$id_provincia)->get();
    }
        
    public function updatedSelectedDistrito($id_distrito){

        $this->corregimiento = corregimiento::where('id_distrito',$id_distrito)->get();
        
    }

    public function save(){


        $this->selectedProvincia ? $this->selectedProvincia : $this->provincia_user_id;
        $this->selectedDistrito ? $this->selectedDistrito : $this->distrito_user_id;
        $this->selectedCorregimiento ? $this->selectedCorregimiento : $this->corregimiento_user_id;

        User::where('id', Auth::user()->id)
            ->update([
                'name' => $this->nombres,
                'lastname' => $this->apellidos,
                'email' => $this->contactMail,
            ]);

        UserInfoDetail::updateOrCreate(
            ['user_id'=>Auth::user()->id],
            ['user_id_number' => $this->identificacion, 'user_day_birthday' => $this->dia,
            'user_month_birthday' => $this->mes, 'user_year_birthday'=>$this->año,
            'user_pais'=>$this->pais, 'user_ecivil' => $this->eCivil, 'user_celular' => $this->celular, 
            'user_provincia' => $this->selectedProvincia,
            'user_distrito'=> $this->selectedDistrito, 
            'user_corregimiento'=> $this->selectedCorregimiento,
            'user_barrio' => $this->barrio, 
            'user_apto_casa' => $this->casa,
            'user_id_type' => $this->typeId,
            'user_genero' => $this->genero
            ]
        );
    }
    
    public function render()
    {
        return view('livewire.profile.profile');
    }
}
