<?php

require "../vendor/autoload.php";




for($i=0;$i<200;$i++) {
$image = \WideImage\WideImage::loadFromFile('og_pizza.jpg');
        $canvas = $image->getCanvas();
        $canvas->useFont('../fonts/arialblack.ttf', 100, $image->allocateColor(76, 75, 75)); 
        
        $name = generateRandomString();
        $canvas->writeText('42', '135', $name);
        $file = 'images/'.$name.rand(1,100).'.jpg';
        $file = str_replace(' ', '_', $file);
        $image->saveToFile($file);

} 

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}