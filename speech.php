<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "vendor/autoload.php"; 

$input_json = '[{"ID":"recnAF3BRjiTngN7Q","Name":"COURTENAY  KITANOVSKI","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/"},{"ID":"recM5zJV1KFvDbKBQ","Name":"Karina  Heinz","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/"},{"ID":"recx1sDl19ybW4Fws","Name":"Lynette  Laming","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/"},{"ID":"recLAPyn3AhOLD0ay","Name":"George  Savva","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/"}]';
$input_array = json_decode($input_json, true);
echo '<pre>';
var_dump($input_array);
echo '</pre>';








//$string = '{"links":[{"tags":["campaign1"],"allowDuplicates":false,"domain":"showme.headstudios.com.au","originalURL":"https://headstudios.com.au/2022/03/15/5-just-around-the-corner-trends-that-will-make-99-of-property-management-companies-obsolete-in-5-years-and-how-you-can-ride-these-trends-to-complete-market-domination-for-your-real-estate-agency/","path":"johns-help"},{"allowDuplicates":false,"domain":"showme.headstudios.com.au","originalURL":"https://headstudios.com.au/2022/03/15/5-just-around-the-corner-trends-that-will-make-99-of-property-management-companies-obsolete-in-5-years-and-how-you-can-ride-these-trends-to-complete-market-domination-for-your-real-estate-agency/","path":"michaels-help"}],"domain":"showme.headstudios.com.au"}';
$string = '{"links":[{"allowDuplicates":false,"domain":"showme.headstudios.com.au","originalURL":"headstudios.com.au","path":"for-mike"},{"allowDuplicates":false,"domain":"showme.headstudios.com.au","originalURL":"https://headstudios.com.au/22","path":"for-lauren"}],"domain":"showme.headstudios.com.au"}';
$array = json_decode($string, true);




  $response = '[{"clicksLimit":null,"icon":null,"title":null,"iphoneURL":null,"androidURL":null,"expiresAt":null,"expiredURL":null,"source":"api","splitURL":null,"splitPercent":null,"integrationGA":null,"integrationGTM":null,"integrationFB":null,"integrationAdroll":null,"originalURL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","DomainId":421680,"archived":false,"path":"courtenays-terminator","cloaking":null,"redirectType":null,"createdAt":"2022-06-19T10:41:23.708Z","OwnerId":458432,"updatedAt":"2022-06-19T10:41:23.708Z","secureShortURL":"https://showme.headstudios.com.au/courtenays-terminator","idString":"lnk_1LHi_2lgKw3","shortURL":"https://showme.headstudios.com.au/courtenays-terminator","duplicate":false,"success":true},{"clicksLimit":null,"icon":null,"title":null,"iphoneURL":null,"androidURL":null,"expiresAt":null,"expiredURL":null,"source":"api","splitURL":null,"splitPercent":null,"integrationGA":null,"integrationGTM":null,"integrationFB":null,"integrationAdroll":null,"originalURL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","DomainId":421680,"archived":false,"path":"karinas-terminator","cloaking":null,"redirectType":null,"createdAt":"2022-06-19T10:41:23.713Z","OwnerId":458432,"updatedAt":"2022-06-19T10:41:23.713Z","secureShortURL":"https://showme.headstudios.com.au/karinas-terminator","idString":"lnk_1LHi_2lgKw4","shortURL":"https://showme.headstudios.com.au/karinas-terminator","duplicate":false,"success":true},{"clicksLimit":null,"icon":null,"title":null,"iphoneURL":null,"androidURL":null,"expiresAt":null,"expiredURL":null,"source":"api","splitURL":null,"splitPercent":null,"integrationGA":null,"integrationGTM":null,"integrationFB":null,"integrationAdroll":null,"originalURL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","DomainId":421680,"archived":false,"path":"lynettes-terminator","cloaking":null,"redirectType":null,"createdAt":"2022-06-19T10:41:23.721Z","OwnerId":458432,"updatedAt":"2022-06-19T10:41:23.721Z","secureShortURL":"https://showme.headstudios.com.au/lynettes-terminator","idString":"lnk_1LHi_2lgKw5","shortURL":"https://showme.headstudios.com.au/lynettes-terminator","duplicate":false,"success":true},{"clicksLimit":null,"icon":null,"title":null,"iphoneURL":null,"androidURL":null,"expiresAt":null,"expiredURL":null,"source":"api","splitURL":null,"splitPercent":null,"integrationGA":null,"integrationGTM":null,"integrationFB":null,"integrationAdroll":null,"originalURL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","DomainId":421680,"archived":false,"path":"georges-terminator","cloaking":null,"redirectType":null,"createdAt":"2022-06-19T10:41:23.740Z","OwnerId":458432,"updatedAt":"2022-06-19T10:41:23.740Z","secureShortURL":"https://showme.headstudios.com.au/georges-terminator","idString":"lnk_1LHi_2lgKw6","shortURL":"https://showme.headstudios.com.au/georges-terminator","duplicate":false,"success":true}]';
$r_array = json_decode($response,true);
echo "Response from multi link create is: ";
echo '<pre>';
var_dump($r_array); // combine this with.. 
echo '</pre>';

$connector = new ConnectorForMe('sk_dr6h17exR4jZwOM7', 'http://147.182.192.192/');
$connector->domain_id = '421680';
$connector->domain_path = 'showme.headstudios.com.au';
$injection = $connector->bulk_link_create($input_array);
$return_airtable = $connector->link_combinator($r_array, $injection);
$connector->og_combinator($return_airtable);

echo "Return AirTable is:  ";
echo '<pre>';
var_dump($return_airtable); // need to combine this with response
echo '</pre>';
//$connector->multi_short_it($links_array);



$links_array = ['links' => $injection,
  'domain' => 'showme.headstudios.com.au'];

  echo "Combined links array is: ";
  echo '<pre>';
  var_dump($links_array); 
  echo '</pre>';



//$connector->multi_short_it($links_array);

//echo "Domain path is: ".$connector->domain_path;
//$image_url = $connector->image_create('Blake_Lively');
//$connector->OGLinkStatus('lnk_1LHi_2kV0L0', 'Not About Not Offending', 'Its not about not offending', $image_url);
//$short_response = $connector->short_It('https://www.google.com', 'your-search-man');

//var_dump($short_response);

class ConnectorForMe extends ConcreteFoundation {

    public $short_api = "sk_dr6h17exR4jZwOM7";
    public $url = "http://147.182.192.192/";
    
    function image_create($name) {

        $image = \WideImage\WideImage::loadFromFile('og_pizza.jpg');
        $canvas = $image->getCanvas();
        $canvas->useFont('fonts/arialblack.ttf', 100, $image->allocateColor(76, 75, 75)); 
        $canvas->writeText('42', '135', $name);
        $file = 'images/'.$name.rand(1,100).'.jpg';
        $file = str_replace(' ', '_', $file);
        $image->saveToFile($file);
        $complete = $this->url.$file;
        return $complete;

    }

    function short_It($url, $path) {

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

        return $response->getBody();
        
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
            $shortnweird = '[["title","'.$title.'"],["description", "'.$description.'"],["image","'.$image.'"],["image:type","image/jpg"]]';
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

        function multi_short_it($links_array) {

          $client = new \GuzzleHttp\Client();

          $response = $client->request('POST', 'https://api.short.io/links/bulk', [
            //'body' => '{"links":[{"tags":["campaign1"],"allowDuplicates":false,"domain":"showme.headstudios.com.au","originalURL":"https://headstudios.com.au/2022/03/15/5-just-around-the-corner-trends-that-will-make-99-of-property-management-companies-obsolete-in-5-years-and-how-you-can-ride-these-trends-to-complete-market-domination-for-your-real-estate-agency/","path":"johns-help"},{"allowDuplicates":false,"domain":"showme.headstudios.com.au","originalURL":"https://headstudios.com.au/2022/03/15/5-just-around-the-corner-trends-that-will-make-99-of-property-management-companies-obsolete-in-5-years-and-how-you-can-ride-these-trends-to-complete-market-domination-for-your-real-estate-agency/","path":"michaels-help"}],"domain":"showme.headstudios.com.au"}',
              'body' => json_encode($links_array),
            'headers' => [
              'Accept' => 'application/json',
              'Authorization' => 'sk_dr6h17exR4jZwOM7',
              'Content-Type' => 'application/json',
            ],
          ]);

          echo "Below is the bulk shortlink response:";
          echo $response->getBody();


        }

        function bulk_link_create($links_array) {

          $shortit_injection = array();
          foreach($links_array as $record) {


            $name = $record['Name'];
            $name = strtok($name, " ");
            $display_name = $name;
            $name = strtolower($name);
            $name = $name.'s-terminator';
            $url = $record['URL'];
            $id = $record['ID'];

            $shortit_injection[] = ['allowDuplicates'=> false, 'displayName' => $display_name, 'recordId'=> $id, 'domain' => 'showme.headstudios.com.au', 'originalURL' => $url, 'path'=>$name];


          }
          return $shortit_injection;

        }

        function link_combinator($response, $injector) {

          //$injector = json_decode($injector, true);
          
          $airtable_return = [];
          foreach($injector as $key=>$value) {

            $recordId = $injector[0]['recordId'];
            $shortUrl = $response[$key]['secureShortURL'];
            echo "Key is: ".$key;
            $name = $injector[$key]['displayName'];
            //echo "Name is: ".$injector[$key]['displayName'];
            echo "Link ID is: ".$response[$key]['idString'];
            $link_id = $response[$key]['idString'];
            
            $airtable_return[$key] = array('recordID' => $recordId,'shortURL' => $shortUrl, 'linkID' => $link_id, 'displayName' => $name);

          }

          return $airtable_return;
        }

        function og_combinator($injector) {


          echo "<p>Og combinator ready to roll</p><pre>";
          var_dump($injector);
          echo "</pre><p>Og combinator has finished the roll</p>";

          foreach($injector as $inject) {

            echo "Display name is: ".$inject['displayName'];
            $img_url = $this->image_create($inject['displayName']);
            $link_id = $inject['linkID'];
            $this->OGLinkStatus($link_id, 'Campaign Title Goes Here', 'Campaign Description Goes Here', $img_url);

          }


        }

}

abstract class ConcreteFoundation {

    public $short_api; // API key for short.ai for shortlink creation
    public $domain_id; // Domain ID for Short.ai 
    public $domain_path; // Path of the Short.io domain without the http
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

    // This takes an array and calls the Short.io multi short function and returns the return array
    abstract protected function multi_short_it($links_array);

    // This function takes in an AirTable JSON with RecordID's and returns Array for input into short multi link create funciton
    abstract protected function bulk_link_create($links_array);

    // This function combines short.io bulk link response and original injection with AirTable record id for a full JSON string to return to AirTable
    abstract protected function link_combinator($response, array $injector);

    // Setup OG dynamic image and campaign outline
    // Input: Output of link combinator
    abstract protected function og_combinator($injector);

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