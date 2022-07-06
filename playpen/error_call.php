<?php
require "../vendor/autoload.php";
require "../error.php";

$right = "Right hereio";
MyFun::json_err('Something is not'.$right);

class MyFun {

    public static function json_err($message) {

    $error = array('status' => 'error', 'data' => $message);
    echo json_encode($error, true);
    echo "Status is: ".$error['status'];

  
  }
}