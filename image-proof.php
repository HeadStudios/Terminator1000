<?php
require "vendor/autoload.php";

//echo "Hello there";

//\WideImage\WideImage::load('Youtube-Thumbnail-01.jpg')->resize(50, 30)->saveToFile('small.jpg');
//echo "World war";

$image = \WideImage\WideImage::loadFromFile('Youtube-Thumbnail-01.jpg');
$font = 
$canvas = $image->getCanvas();
$canvas->useFont('fonts/beautiful.ttf', 60, $image->allocateColor(255, 255, 255)); 
$canvas->writeText('center', 'center', 'I am ');
$image->saveToFile('lifeisgrand.jpg');