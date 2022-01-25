<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payeasyController extends Controller
{
    function payprocessresponce(){
        $response = $_REQUEST; 
        dd($response);
    }
}