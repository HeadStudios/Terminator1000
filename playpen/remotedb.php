<?php

require "../vendor/autoload.php";
require "../env.php";
require "../inc/zohoinvoice.php";

//$dbh = new PDO('mysql:host=terminator800-do-user-11771047-0.b.db.ondigitalocean.com:25060;dbname=defaultdb', 'doadmin', 'AVNS_V-SkkolpyadlmMzCdjc');
//$dbh = new PDO('mssql:host=www.myaddress.com:1234;dbname=test', 'user', 'pass');
global $env;
$zoho = new ZohoInvoice($env);


$results = DB::query("SELECT * FROM `forms` WHERE form_id = 3234");

if(empty($results)) { echo "We got nothing son"; }





$results = DB::query("SELECT * FROM `forms` WHERE form_id = 213");



if(empty($results)) { echo "We got nothing son; "; }

$form_exists = $zoho->formExists(6340);
if($new_opp) {
    echo "This is the old form";
} else { 
    echo "This is a new form";
    }


//phpinfo();

