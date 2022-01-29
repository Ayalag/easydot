<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\pendingOrders;
use Illuminate\Support\Facades\Auth;

class payeasyController extends Controller
{
    function payprocessresponce(){
        $response = $_REQUEST; 

        if($response['Estado'] === 'Aprobada'){
            $ordernumber = str_pad($response['OrderNumber'],7,"0",STR_PAD_LEFT);
            return view('PagoAprobado', compact('ordernumber'));

            if(Auth::check()){

            }
        }
    }
}