<?php

namespace App\Http\Controllers\productos\veterinario;

use App\Http\Controllers\Controller;
use App\Models\productos\veterinario;
use Illuminate\Http\Request;

class veterinarioController extends Controller
{
    public function index()
    {
        $veterinario = veterinario::all();

        return view('productos.mascotas.veterinario', compact('veterinario'));
    }

    public function isnuranceSeleted($aseguradora, $plan )
    {
        $cardHtml = veterinario::where('Planes_Veterinarios_Aseguradora' ,$aseguradora)
        ->where('Plan_veterinario_Tipo',$plan)
        ->get();

        return view('productos.mascotas.registro', compact('cardHtml'));
    }
}