<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurrencyController extends Controller{
    public static function Milos() {
/*
        $mandolorianQuotes = [
            "This is the way.",
            "I have spoken.",
            "I am no Jedi.",
            "I will not be the one to ignite it.",
            "I have lived long enough to see the same eyes in different people.",
            "I have spoken.",
            "This is the way.",
            "Peace is a lie, there is only passion.",
            "Through passion, I gain strength.",
            "Through strength, I gain power.",
            "Through power, I gain victory.",
            "Through victory, my chains are broken.",
            "The Force shall free me."
          ];
        $k = array_rand($mandolorianQuotes, 1);
        $one = $mandolorianQuotes[$k];
        $ss = json_encode($one);
          return $ss;
*/




$query         = array(
    'archived' => 'false',
);

$curl = curl_init();

curl_setopt_array(
    $curl,
    array(
        CURLOPT_HTTPHEADER     => array(
            'Authorization: pk_57096564_GTODYU5KD1U0D88DUOM38H5NDTFI8DBA',
            'Content-Type: application/json',
        ),
        CURLOPT_URL            => 'https://api.clickup.com/api/v2/folder/134388839/list?' . http_build_query( $query ),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST  => 'GET',
    )
);

$response = curl_exec( $curl );
$decode_response = json_decode( $response, true ); 
return $decode_response;         
    }
}