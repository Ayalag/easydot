<?php

namespace App\Http\Controllers;

use App\Mail\mail\userSelectedInsuranceMail;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\pendingOrders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class payeasyController extends Controller
{
    function payprocessresponce(){
        
        $response = $_REQUEST; 

        if($response['id_insurance'] == '1'){

            $url_dowload = 'https://www.easydot.com.pa/producto/motor/auto/comprobante/'.$response['OrderNumber'];
        }
        if($response['id_insurance'] == '2'){

            $url_dowload = 'https://www.easydot.com.pa/producto/motor/moto/comprobante/'.$response['OrderNumber'];
        }
        if($response['id_insurance'] == '3') {

            $url_dowload = 'https://www.easydot.com.pa/producto/mascota/comprobante/'.$response['OrderNumber'];
        }
        if($response['id_insurance'] == '4') {

            $url_dowload = 'https://www.easydot.com.pa/producto/persona/comprobante/'.$response['OrderNumber'];
        }
        if($response['id_insurance'] == '6') {

            $url_dowload = 'https://www.easydot.com.pa/producto/dental/comprobante/'.$response['OrderNumber'];
        }

        if($response['Estado'] === 'Aprobada'){
            $ordernumber = str_pad($response['OrderNumber'],7,"0",STR_PAD_LEFT);
            
                pendingOrders::where('id',$response['OrderNumber'])
                ->update(['fecha_pago'=>$response['Fecha'],
                          'hora_pago'=>$response['Hora'],
                          'tipo_pago'=>$response['Tipo'],
                          'url_dowload'=>$url_dowload
                ]);

                $details =[
                    'nombre' => $response['Usuario'],
                    'url' => $url_dowload
                ];

                DB::statement('call pending_order_HST_TRANSFER(?)',[$response['OrderNumber']]);

                Mail::to($response['Email'])->send(new userSelectedInsuranceMail($details));

            return view('PagoAprobado', compact('ordernumber'));
        }
    }
}