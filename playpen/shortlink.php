<?php

require "../vendor/autoload.php";
require "../env.php";

$array = array('Title' => 'A title as they come', 'Age' => 32, 'URL' => 'https://headstudios.com.au', 'ShortDomain' => 'showme.headstudios.com.au', 'SMSTitle' => 'DFY Offer', 'SMSDescription' => 'Amazing or what');
$campaign = new Campaign($array);
echo $campaign->getSmsdescription();
echo "The age is: ".$campaign->getAge();

//$john = new Contact(array('Name' => 'Michael Smith', 'Mobile' => '041324234'));
//echo "John's name is: ".$john->getName();

$link = new Shortlink($campaign, 'boom');

class Shortlink {

    function __construct(Campaign $campaign, string $path) {

        if($campaign->smsready()) { 
            
            $client = new GuzzleHttp\Client();

            global $shortio_secret;
            $short_data = [
                "allowDuplicates" => true,
                "domain" => $campaign->getShortdomain(),
                "originalURL" => $campaign->getUrl(),
                "path" => $path,
                "title" => $campaign->getSmstitle(),
            ];
            $auth = 'Authorization: '.$shortio_secret;
            $response = $client->post('https://api.short.io/links', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => $shortio_secret
                ],
                'json' => $short_data,
                'timeout' => 5
            ]);

            var_dump($response);

            return $response->getBody();

         } else { echo "You not ready"; }

        

        $client = new GuzzleHttp\Client();
        global $shortio_secret;
        global $shortio_domain;

    }
}



class Campaign {

    protected $title;
    protected $description;
    protected $age;
    protected $smstitle;
    protected $smsdescription;
    protected $url;
    protected $shortdomain;

    private $data = array();

    function __construct(array $properties=array()) {

        foreach($properties as $key => $value){
            $key = strtolower($key);

            $this->{$key} = $value;
        }

    }

    function smsready() {
        if(isset($this->title, $this->description, $this->smstitle, $this->url, $this->shortdomain)) {
            return true;
        } else { return false; }
    }

    function __call($method, $params) {

     $var = lcfirst(substr($method, 3));

     if (strncasecmp($method, "get", 3) === 0) {
         return $this->$var;
     }
     if (strncasecmp($method, "set", 3) === 0) {
         $this->$var = $params[0];
     }
}

}

class Contact extends ContainerBase {

    protected $name;
    protected $mobile;
    protected $email;
    protected $id;

}


abstract class ContainerBase {

    function __construct(array $properties=array()) {

        foreach($properties as $key => $value){
            $key = strtolower($key);

            $this->{$key} = $value;
        }

    }

    function __call($method, $params) {

        $var = lcfirst(substr($method, 3));
   
        if (strncasecmp($method, "get", 3) === 0) {
            return $this->$var;
        }
        if (strncasecmp($method, "set", 3) === 0) {
            $this->$var = $params[0];
        }
   }

}
