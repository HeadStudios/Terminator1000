<?php
require_once('vendor/autoload.php');
$client = new GuzzleHttp\Client();
$description = "I can't feel it";
$title = "Dynamic title";
$image = "https://i.ibb.co/nnyPvqN/andrew-coronis.jpg";
$short_data = [
    "title" => "Are you who you say you are",
    "description" => "Something's strange I can feel it",
    "image" => "https://i.ibb.co/nnyPvqN/andrew-coronis.jpg",
    "image:type" => 'image/jpg'
];
$shortnweird = '[["title","'.$title.'"],["description", "'.$description.'"],["image","'.$image.'"],["image:type","image/jpeeg"]]';
echo $shortnweird;
$response = $client->request('PUT', 'https://api.short.io/links/opengraph/421680/lnk_1LHi_2kV0L0', [
  'body' => $shortnweird,
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'sk_dr6h17exR4jZwOM7',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();