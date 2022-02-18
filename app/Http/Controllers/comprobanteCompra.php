<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class comprobanteCompra extends Controller
{
    public function comprobante_motor(Request $request){
       $response = DB::select('call comprobante_motor(?)',[$request->order_number]);

       return view('emails.productos.motor.comprobante', compact('response'));
    }
    public function comprobante_mascota(Request $request){
       $response = DB::select('call comprobante_mascota(?)',[$request->order_number]);

       return view('emails.productos.mascota.comprobante', compact('response'));
    }
    public function comprobante_persona(Request $request){
       $response = DB::select('call comprobante_persona(?)',[$request->order_number]);

       return view('emails.productos.persona.comprobante', compact('response'));
    }
    public function comprobante_hogar(Request $request){
       $response = DB::select('call comprobante_hogar(?)',[$request->order_number]);

       return view('emails.productos.hogar.comprobante', compact('response'));
    }
    public function comprobante_dental(Request $request){
       $response = DB::select('call comprobante_dental(?)',[$request->order_number]);

       return view('emails.productos.dental.comprobante', compact('response'));
    }
}