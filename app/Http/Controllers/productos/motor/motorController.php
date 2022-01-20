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
    public function index()
    {
        $motores = motor::all();

        return view('productos.motor.motor', compact('motores'));
    }

    public function isnuranceSeleted($motor, $type, $card )
    {

        $cardHtml = motor::where('Motor_tipo' ,$motor)
        ->where('Motor_Tipo_Seguro',$type)
        ->where('Motor_tipo_Aseguradora', $card)
        ->get();

        // return $cardHtml;

        return view('productos.motor.registro', compact('cardHtml'));
    }
  
}