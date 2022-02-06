<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function exportPDF(){
       
    $pdf = PDF::loadview('emails.productos.compra')->setOptions(['defaultFont' => 'sans-serif']);
    
    return $pdf->download('hola.pdf');
   }
}