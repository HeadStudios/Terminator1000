<?php 

require "../vendor/autoload.php";
require "../env.php";

echo "Hello there";

for($i=0;$i<20;$i++) {

    echo "We are ".$i."</br>";
    $promise = $client->postAsync('http://127.0.0.1:8000/playpen/image_create.php', );
    //image_create($i, 'https://upload.wikimedia.org/wikipedia/commons/7/7a/Basketball.png');

}

function image_create($name, $url='og_pizza.jpg') {

    $image = \WideImage\WideImage::loadFromFile($url);
    $canvas = $image->getCanvas();
    $font_url = $_SERVER['DOCUMENT_ROOT'].'/fonts/arialblack.ttf';
    $canvas->useFont($font_url, 100, $image->allocateColor(76, 75, 75)); 
    $canvas->writeText('42', '135', $name);
    $filename = $name.rand(1,100).'.png';
    $file = $_SERVER['DOCUMENT_ROOT'].'/images/'.$filename;
    $file = str_replace(' ', '_', $file);
    $image->saveToFile($file);
    $complete = 'http://127.0.0.1:8000/playpen/multi_threader.php/images/'.$filename;
    return $complete;

}

