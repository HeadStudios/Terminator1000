<?php
require "../vendor/autoload.php";
require "../env.php";
global $env;

$image_input = json_decode(file_get_contents('php://input'), true);

$name = $image_input['name'];
$image = $image_input['imgurl'];

$return = image_create($name, $image);
$return = array('url' => $return);
echo json_encode($return);

function image_create($name, $url='og_pizza.jpg') {

    global $env;
    $image = \WideImage\WideImage::loadFromFile($url);
    $canvas = $image->getCanvas();
    $font_url = $_SERVER['DOCUMENT_ROOT'].'/fonts/arialblack.ttf';
    $canvas->useFont($font_url, 100, $image->allocateColor(76, 75, 75)); 
    $canvas->writeText('42', '135', $name);
    $filename = $name.rand(1,100).'.png';
    $file = $_SERVER['DOCUMENT_ROOT'].'/images/'.$filename;
    $file = str_replace(' ', '_', $file);
    $image->saveToFile($file);
    $url = $env['url'].'/images/'.$filename;
    return $url;

}