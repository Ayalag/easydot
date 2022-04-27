<?php

namespace App\Http\Controllers\productos\motor;

use App\Http\Controllers\Controller;
use App\Models\productos\motor;
use Illuminate\Http\Request;

class motorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $motores = motor::all();

        if($request->type=='auto'){
            $motores = motor::orderBy('tipo', 'asc')
            -> get();
            return view('productos.motor.motor-auto', compact('motores'));
        }

        if($request->type=='moto'){

            $motores = motor::orderBy('tipo', 'desc')
                 -> get();
            return view('productos.motor.motor-moto', compact('motores'));
        }

    }

    public function isnuranceSeleted($tipo, $aseguradora, $plan )
    {

        $cardHtml = motor::where('tipo' ,$tipo)
        ->where('plan',$plan)
        ->where('aseguradora', $aseguradora)
        ->get();

        // return $cardHtml;

        return view('productos.motor.registro', compact('cardHtml'));
    }
  
}