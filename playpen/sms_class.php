<?php

require "../vendor/autoload.php"; 
require "../env.php";
require "../error.php";

$url = 'http://147.182.192.192/thepath/services/send.php?key=4e9456b009fc7df6e2a15e1742694822906759c9&number=0485826254&message=Here+is+a+sample+message+-+this+is+sent+from+BEAVER%21&devices=1&type=sms&prioritize=1';
$json = '[{"action":"smssender"},{"ID":"recpuIDwtkOxhYyLO","Name":"Kosta  Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/kostas-terminator","LinkID":"lnk_1LHi_2mHMTF","Mobile":["0412 826 569"]},{"ID":"rec2nv7qKlwU5jmbV","Name":"Kostya Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/kostyas-terminator","LinkID":"lnk_1LHi_2mHMTG","Mobile":["+61412 826 569"]},{"ID":"recHeks3mMpdTZnvE","Name":"Konstantin Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/konstantins-terminator","LinkID":"lnk_1LHi_2mHMTH","Mobile":["4128 265 69"]}]';
global $env;

$sender = new MySMS($env);
$sender->echoKey();

class MySMS {

    protected $api;
    protected $url;

    function __construct($env) {
        $this->api = $env['mysms_key'];
        $this->url = $env['mysms_url'];
    }

    function echoKey() {
        echo "They key from the class is: ".$this->api." and the URL is: ".$this->url;
    }


}