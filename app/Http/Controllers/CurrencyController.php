<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurrencyController extends Controller{
    public static function Milos() {


$query         = array(
    'archived' => 'false',
    'order_by' => 'id',
    'reverse' => 'true',
);

$curl = curl_init();

curl_setopt_array(
    $curl,
    array(
        CURLOPT_HTTPHEADER     => array(
            'Authorization: pk_57096564_GTODYU5KD1U0D88DUOM38H5NDTFI8DBA',
            'Content-Type: application/json',
        ),
        CURLOPT_URL            => 'https://api.clickup.com/api/v2/list/188299270/task?' . http_build_query( $query ),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST  => 'GET',
    )
);

$response = curl_exec( $curl );
$decode_response = json_decode( $response, true ); 
return $decode_response;   
//print_r($decode_response);      
    }

    public static function valet_get_single_client($id) {



$query = array(
  "custom_task_ids" => "true",
);

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_HTTPHEADER => [
    "Authorization: pk_57096564_GTODYU5KD1U0D88DUOM38H5NDTFI8DBA",
    "Content-Type: application/json"
  ],
  CURLOPT_URL => "https://api.clickup.com/api/v2/task/" . $id . "?" . http_build_query($query),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
]);

$response2 = curl_exec($curl);
$error = curl_error($curl);



$decode_response2 = json_decode( $response2, true ); 
print_r($decode_response2);   



  
    }

}


