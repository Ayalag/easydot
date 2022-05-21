<?php

namespace App\Http\Controllers\productos\persona;

use Illuminate\Http\Request;
use App\Models\productos\persona;
use App\Http\Controllers\Controller;

class personaController extends Controller
{
    public function er(){  
        $er = persona::where('plan',8)->get();
        return view('productos.personas.er', compact('er'));
    }
    public function erm(){
        $erm = persona::where('plan',9)->get();
        return view('productos.personas.erm', compact('erm'));
        
    }

    public function isnuranceSeleted($clase, $id)
    {
        $cardHtml = persona::where('id' ,$id)
        ->get();
        return view('productos.personas.registro', compact('cardHtml','clase'));
    }

}