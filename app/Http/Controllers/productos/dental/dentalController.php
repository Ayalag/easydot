<?php

namespace App\Http\Controllers\productos\dental;

use Illuminate\Http\Request;
use App\Models\productos\dental;
use App\Http\Controllers\Controller;

class dentalController extends Controller
{
    public function index()
    {
        $dentales = dental::all();

        return view('productos.personas.dental', compact('dentales'));
        
    }

    public function isnuranceSeleted($id)
    {
        $cardHtml = dental::where('id' ,$id)
        ->get();

        return view('productos.personas.dental-registro', compact('cardHtml'));
    }
}
