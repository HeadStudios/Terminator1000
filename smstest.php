<?php

require "vendor/autoload.php";
require "env.php";

global $voyage_secret;

//SMS_Voyage_Guzzle();

$json = '[{"action":"SMSTime"},{"ID":"recpuIDwtkOxhYyLO","Name":"Kosta  Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Mobile":"61412826569"},{"ID":"rec2nv7qKlwU5jmbV","Name":"Kostya Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Mobile":"61412826569"},{"ID":"recHeks3mMpdTZnvE","Name":"Konstantin Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Mobile":"61412826569"}]';
$array = json_decode($json, true);
echo '<pre>';
var_dump($array);
echo '</pre>';

$key = array_search('action', $array); 

echo "The key is...";
if($array[0]['action'] == "SMSTime") {

    echo "Are you a Gemini?";

}

for($i = 0; $i<10; $i++) {

    echo "Number ".$i."watch the 5";
    if($i>5) { return; }

}




function SMS_Voyage_Guzzle($message, $mobile) {

    $client = new GuzzleHttp\Client();

    global $voyage_secret;
    $params = ['query' => [
        "from" => 'SMS Dummy',
        "text" => $message,
        "to" => $mobile,
        "api_key" => "d3e293a6",
        "api_secret" => $voyage_secret
    ]
    ];

    $response = $client->request('GET','https://rest.nexmo.com/sms/json',$params);

    //return $response->getBody();

}

function SMS_Voyage($text) {

    global $voyage_secret;

    $ch = curl_init();
    
    $sms_data = [
        "from" => 'PHP Robot',
        "text" => 'Yes this is really coming from code',
        "to" => "61412826569",
        "api_key" => "d3e293a6",
        "api_secret" => $voyage_secret
        
    ];
    
    
    
    curl_setopt($ch, CURLOPT_URL, 'https://rest.nexmo.com/sms/json');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($sms_data));
    
    $headers = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    
    
    }