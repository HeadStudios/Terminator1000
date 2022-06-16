<?php
require __DIR__."/wideimage/lib/WideImage.php";

WideImage::load('pizza_learn.jpg')->resize(50, 30)->saveToFile('small.jpg');