<?php

require "vendor/autoload.php";

$name = "WeAreGood";
$image = \WideImage\WideImage::loadFromFile('https://dl.airtable.com/.attachments/faaeedf7c2d0b7bd0bd3334102037634/f5036edf/andrew_coronis.jpg');
        $canvas = $image->getCanvas();
        $canvas->useFont('fonts/arialblack.ttf', 100, $image->allocateColor(76, 75, 75)); 
        $canvas->writeText('42', '135', 'Got Everything I Need');
        $file = 'images/'.$name.rand(1,100).'.jpg';
        $file = str_replace(' ', '_', $file);
        $image->saveToFile($file);
        //$complete = $this->url.$file;
        //return $complete;


echo "Hello";

$working = __DIR__.'/images/workingroger.jpeg';

//copy('https://dl.airtable.com/.attachmentThumbnails/aa9955df65e792ddb2b4eb184b48a887/62aa6da3', $working);
