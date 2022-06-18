<?php

require "vendor/autoload.php";

$wehere = array("We" => "Are", "Here" => "Now");

echo json_encode($wehere);

$connector = new ConnectorForMe('sk_dr6h17exR4jZwOM7', 'http://147.182.192.192/');
$connector->domain_id = '421680';
$image_url = $connector->image_create('Blake Lively');
$connector->OGLinkStatus('lnk_1LHi_2kV0L0', 'Not About Not Offending', 'Its not about not offending', $image_url);


class ConnectorForMe extends ConcreteFoundation {

    public $short_api = "sk_dr6h17exR4jZwOM7";
    public $url = "http://147.182.192.192/";
    
    function image_create($name) {

        $image = \WideImage\WideImage::loadFromFile('og_pizza.jpg');
        $canvas = $image->getCanvas();
        $canvas->useFont('fonts/arialblack.ttf', 100, $image->allocateColor(76, 75, 75)); 
        $canvas->writeText('42', '135', $name);
        $file = 'images/'.$name.rand(1,100).'.jpg';
        $image->saveToFile($file);
        $complete = $this->url.$file;
        return $complete;

    }

    function short_It($url, $path) {

        $og_image = $this->image_create('Mike');

        echo "OG Image is: ".$og_image;

        $client = new GuzzleHttp\Client();

        $shortio_secret = $this->short_api;
        echo "Short API secret is: ".$shortio_secret;
        $short_data = [
            "allowDuplicates" => true,
            "domain" => 'showme.headstudios.com.au',
            "originalURL" => $url,
            "path" => $path,
            "title" => "PHP Campaign [You Have Arrived]",
        ];
        echo "I keep it groovy";
        $auth = 'Authorization: '.$shortio_secret;
        echo $auth." << auth";
        $response = $client->post('https://api.short.io/links', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => $shortio_secret
            ],
            'json' => $short_data,
            'timeout' => 5
        ]);

        var_dump(json_decode($response->getBody(),true));
        echo "Ignore past here";

        return $response;
        
        }

        function OGLinkStatus($link_id, $title, $description, $image) {
    
            $shortio_secret = $this->short_api;
            $domainid = $this->domain_id;
            $post_url = 'https://api.short.io/links/opengraph/'.$domainid.'/'.$link_id;

            $client = new GuzzleHttp\Client();

            $short_data = [
                "title" => $title,
                "description" => $description,
                "image" => $image,
                "image:type" => 'image/jpg'
            ];
            //$shortnweird = '[["title","Is there anybody out there"],["description","'.$description.'"]]';
            $shortnweird = '[["title","'.$title.'"],["description", "'.$description.'"],["image","'.$image.'"],["image:type","image/jpeeg"]]';
            var_dump($short_data);

            /*$response = $client->request('PUT', $post_url, [
                'body' => $shortnweird,
                'headers' => [
                  'Accept' => 'application/json',
                  'Authorization' => 'sk_dr6h17exR4jZwOM7',
                  'Content-Type' => 'application/json',
                ],
              ]);*/

              $response = $client->request('PUT', $post_url, [
                'body' => $shortnweird,
                'headers' => [
                  'Accept' => 'application/json',
                  'Authorization' => 'sk_dr6h17exR4jZwOM7',
                  'Content-Type' => 'application/json',
                ],
              ]);

              
              
              echo $response->getBody();


            //var_dump(json_decode($response->getBody(),true));    
            
        }

        

}

abstract class ConcreteFoundation {

    public $short_api; // API key for short.ai for shortlink creation
    public $domain_id; // Domain ID for Short.ai 
    public $url; // URL for the instance of the app - we should fetch this from ENV.php

    public function __construct($shortapi, $urla) {
        $this->short_api = $shortapi;
        $this->url = $urla;
    }

    public function getUrl() {
        echo "URL is: ".$this->url;
    }

    // Create image - returns path to complete image using URL
    abstract protected function image_create($name);

    // Short a URL with the given path - returns Guzzle response 
    abstract protected function short_It($url, $path);

    // Update an existing shortlink with an og:image, og:title and og:description based on LinkID
    abstract protected function OGLinkStatus($link_id, $title, $description, $image);

}



/*

<?php
require_once('vendor/autoload.php');


$response = $client->request('PUT', 'https://api.short.io/links/opengraph/421680/lnk_1LHi_2kV0L0', [
  'body' => '[["title","Is there anybody out there"],["description","Something is wrong I can feel it"]]',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'sk_dr6h17exR4jZwOM7',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();
echo $response->getBody();

*/