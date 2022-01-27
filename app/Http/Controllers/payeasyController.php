<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payeasyController extends Controller
{
    function payprocessresponce(){
        $response = $_REQUEST; 

        if($response['Estado'] === 'Aprobada'){
            $ordernumber = str_pad($response['OrderNumber'],7,"0",STR_PAD_LEFT);
            return view('PagoAprobado', compact('ordernumber'));
        }
    }
}