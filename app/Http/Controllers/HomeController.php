<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function pay(){



        $data = array(
            "CCLW" => '1930E9ADB324756FBF714E52D7EFB6B67F362B405E5A3FA33579D2D410FC6B2862596A2388CE682B21FACF6E9979B4675B859355812C98FC5B409ED4533DAA3D',
            "CMTN" => 50.00,
            "CDSC" => 'Pruebas',
            "RETURN_URL" => '68747470733A2F2F70616775656C6F666163696C73612E7A656E6465736B2E636F6D2F6167656E742F66696C746572732F3439313933393538',
            "PF_CF" => '5B7B226964223A227472616D6974654964222C226E616D654F724C6162656C223A2249642064656C205472616D697465222C2276616C7565223A2254494432333435227D5D',
            "PARM_1" => '19816201',
            );
            $postR="";
            foreach($data as $mk=>$mv) { $postR .= "&".$mk."=".$mv; }
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL, "https://sandbox.paguelofacil.com/");
            
            //curl_setopt($ch,CURLOPT_URL, "https://secure.paguelofacil.com/LinkDeamon.cfm/AUTH");   ****En Caso de querer Pre-autorizar  y capturar en procesos separados.
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
            curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded','Accept: */*'));
            curl_setopt($ch,CURLOPT_POSTFIELDS,$postR);
            $result = curl_exec($ch);

            return $result;
    }
}