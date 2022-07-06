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
    $promises[] = $client->requestAsync('POST', 'http://127.0.0.1:8000/playpen/image_create.php', [
        'headers' => [
            'Content-Type' => 'application/json'
        ],
        'json' => $short_data
    ]);

    echo "Do you see the Promises? - ".$i;
    //image_create($i, 'https://upload.wikimedia.org/wikipedia/commons/7/7a/Basketball.png');

}
