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

        $url_dowload = 'https://www.easydot.com.pa/producto/motor/comprobante/'.$response['OrderNumber'];

        if($response['Estado'] === 'Aprobada'){
            $ordernumber = str_pad($response['OrderNumber'],7,"0",STR_PAD_LEFT);
            
                pendingOrders::where('id',$response['OrderNumber'])
                ->update(['fecha_pago'=>$response['Fecha'],
                          'hora_pago'=>$response['Hora'],
                          'tipo_pago'=>$response['Tipo'],
                          'url_dowload'=>$url_dowload
                ]);

                DB::statement('call pending_order_HST_TRANSFER(?)',[$response['OrderNumber']]);

            return view('PagoAprobado', compact('ordernumber'));
        }
    }
}