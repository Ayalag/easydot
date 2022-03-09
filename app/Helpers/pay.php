<?php

function payeasy($saleAmount,$saleDescription,$orderNumber,$id_insurance,$contact_mail){
    
$cclw = "1930E9ADB324756FBF714E52D7EFB6B67F362B405E5A3FA33579D2D410FC6B2862596A2388CE682B21FACF6E9979B4675B859355812C98FC5B409ED4533DAA3D";
// $amount = $saleAmount;
// $descrition = $saleDescription;


$data = array(
"CCLW" => $cclw ,
"CMTN" => $saleAmount,
"CDSC" => $saleDescription,
"RETURN_URL" => '68747470733a2f2f65617379646f742e636f6d2e70612f7061676f73466163696c2f726573707565737461',
"PF_CF" => '5B7B226964223A227472616D6974654964222C226E616D654F724C6162656C223A2249642064656C205472616D697465222C2276616C7565223A2254494432333435227D5D',
"OrderNumber" => $orderNumber,
"id_insurance" => $id_insurance,
"contact_mail" => $contact_mail,
);


$postR="";
foreach($data as $mk=>$mv) { $postR .= "&".$mk."=".$mv; }
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, "https://sandbox.paguelofacil.com/LinkDeamon.cfm");


//curl_setopt($ch,CURLOPT_URL, "https://secure.paguelofacil.com/LinkDeamon.cfm/AUTH"); ****En Caso de querer Pre-autorizar y capturar en procesos separados.
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded','Accept: */*'));
curl_setopt($ch,CURLOPT_POSTFIELDS,$postR);
$result = curl_exec($ch);

return ($result);

}