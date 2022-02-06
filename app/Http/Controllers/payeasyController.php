<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\pendingOrders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class payeasyController extends Controller
{
    function payprocessresponce(){
        $response = $_REQUEST; 

        if($response['Estado'] === 'Aprobada'){
            $ordernumber = str_pad($response['OrderNumber'],7,"0",STR_PAD_LEFT);

            if(Auth::check()){
                pendingOrders::where('id',$response['OrderNumber'])
                ->update(['fecha_pago'=>$response['Fecha'],
                          'hora_pago'=>$response['Hora'],
                          'tipo_pago'=>$response['Tipo']
                ]);

                DB::statement('call pending_order_HST_TRANSFER(?)',[$response['OrderNumber']]);

            }else{
                pendingOrders::where('id',$response['OrderNumber'])
                ->update(['fecha_pago'=>$response['Fecha'],
                          'hora_pago'=>$response['Hora'],
                          'tipo_pago'=>$response['Tipo'],
                          'non_register_user'=>$response['Usuario'],
                          'non_register_user_mail'=>$response['Email']
                ]);
                
                DB::statement('call pending_order_HST_TRANSFER(?)',[$response['OrderNumber']]);
            }

            return view('PagoAprobado', compact('ordernumber'));
        }
    }
}