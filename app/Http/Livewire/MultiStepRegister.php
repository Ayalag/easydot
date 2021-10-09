<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStepRegister extends Component
{
    use WithFileUploads;

    public $nombres;
    public $apellidos;
    public $typeId;
    public $identificacion;
    public $pais;
    public $genero;
    public $fecha_de_nacimiento;
    public $estado_civil;
    // public $description;
    // public $email;
    // public $phone;

    // public $city;
    // public $frameworks = [];
    // public $cv;
    // public $terms;

    public $totalSteps = 4;
    public $currentStep = 1;
    public $show = false;

    public function mount(){
        $this->currentStep = 1;
    }
    
    public function render()
    {
        return view('livewire.multi-step-register');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }
    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){

        if($this->currentStep ==1){

            if($this->typeId =='cedula'){

                $this->validate([
                    'nombres' => 'required|string',
                    'apellidos' => 'required|string',
                    'typeId' => 'required|min:1',
                    'identificacion' => ['required','regex:/^P$|^(?:PE|E|N|[23456789]|[23456789](?:A|P)?|1[0123]?|1[0123]?(?:A|P)?)$|^(?:PE|E|N|[23456789]|[23456789](?:AV|PI)?|1[0123]?|1[0123]?(?:AV|PI)?)-?$|^(?:PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(?:\d{1,4})-?$|^(PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(\d{1,4})-(\d{1,6})$/i'],
                    'genero' => 'required|min:1',
                    'fecha_de_nacimiento' => 'required',
                ]);
            }
            else{

                $this->validate([
                    'nombres' => 'required|string',
                    'apellidos' => 'required|string',
                    'typeId' => 'required|min:1',
                    'identificacion' => 'required',
                    'pais' => 'required',
                    'genero' => 'required|min:1',
                    'fecha_de_nacimiento' => 'required',
                ]);
            }
        }
        elseif($this->currentStep == 2){

            $this->validate([
                'email' => 'required|email',
                'phone' => 'required',
                'country' => 'required',
                'city' => 'required',
            ]);

        }
        elseif($this->currentStep == 3){

            $this->validate([
                'frameworks' => 'required|array|min:2|max:3',
            ]);

        }
        
    }

    public function register(){
        $this->resetErrorBag();
        $this->validate([
            'cv'=> 'required|mimes:doc,docx,pdf|max:1024',
            'terms' => 'accepted'
        ]);

    }
}
