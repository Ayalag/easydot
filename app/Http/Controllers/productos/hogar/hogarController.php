<?php

namespace App\Http\Controllers\productos\hogar;

use Illuminate\Http\Request;
use App\Models\productos\hogar;
use App\Http\Controllers\Controller;
use App\Models\UserInfoDetail;
use Illuminate\Support\Facades\Auth;

class hogarController extends Controller
{
    public function index()
    {
        $hogares = hogar::all();

        return view('productos.hogar.hogar', compact('hogares'));
        
    }

    public function isnuranceSeleted($id)
    {

        $cardHtml = hogar::where('id' ,$id)                  
        ->get();

        return view('productos.hogar.registro', compact('cardHtml'));
    }
}
