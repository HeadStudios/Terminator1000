<?php 

require "../vendor/autoload.php";
require "../env.php";

$client = new GuzzleHttp\Client();


for($i=0;$i<20;$i++) {

    $short_data = [
        "name" => $i,
        "imgurl" => 'https://upload.wikimedia.org/wikipedia/commons/7/7a/Basketball.png'
    ];
    echo "We are ".$i."</br>";
    $promises[] = $client->requestAsync('POST', 'http://147.182.192.192/playpen/image_create.php', [
        'headers' => [
            'Content-Type' => 'application/json'
        ],
        'json' => $short_data
    ]);

    echo "Do you see the Promises? - ".$i;
    //image_create($i, 'https://upload.wikimedia.org/wikipedia/commons/7/7a/Basketball.png');

}

$pool = new \GuzzleHttp\Pool($client, $promises,[
    'concurrency' => 5,
    'fulfilled' => function (Response $response, $index) use (&$responses) {
        // if ($response->getStatusCode() == 200) {
              $responses[] = json_decode($response->getBody(), true);
        // }
        print_r($responses); // this will have all the responses 
    },
    'rejected' => function (\GuzzleHttp\Exception\RequestException $reason, $index) {
        // dd($reason); //you can store it in laravel logs
    },
]);
$pool->promise()->wait();
