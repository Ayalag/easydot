<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class comprobanteCompra extends Controller
{
    public function comprobante_motor(Request $request){
       $response = DB::select('call comprobante_motor(?)',[$request->order_number]);

    //    return $response;
       return view('emails.productos.motor.comprobante', compact('response'));
    }
}