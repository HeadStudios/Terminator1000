<?php 
require "vendor/autoload.php";
function customError($errno, $errstr, $errfile, $errline) {
    $error = array('Error Number:' => $errno,
    'Error String:' => $errstr,
    'Error File:' => $errfile,
    'Error Line' => $errline);
    echo json_encode($error);
    die();
  }
set_error_handler("customError", E_USER_ERROR);

$array_dump = array('Name'=>'John',
'Age'=>23, 'Gender'=>'Male','Height'=>163);

$top_student = new EnchiladaSlice();
//$top_student->arrayMan($array_dump);
$top_student->loadValues();

if (extension_loaded('mysql') or extension_loaded('mysqli')) {
    echo "MySQL is a GO!";
}

class EnchiladaSlice {

    function arrayMan($array) {

        if(!isset($array['Name'],$array['Gender'])) {
            trigger_error("Required arguments are not set to create something", E_USER_ERROR);
        } else { echo "You shouldn't be seeing this"; }
        
        

    }

    function loadValues() {

        $this->console_log('We are on this side of life');

    }



    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
    ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }



}