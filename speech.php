<?php
header('Content-type: application/json');
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ERROR | E_PARSE);
require "vendor/autoload.php"; 
require "env.php";
require "click-vars.php";
require "error.php";
require "inc/shortlink_parser.php";





$input_array = json_decode(file_get_contents('php://input'), true);
//$input_json = '[{"action":"linkupdater"},{"ID":"recTAFqIrRzfmpnln","Name":"Andrew Coronis","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/andrews-terminator","LinkID":"lnk_1LHi_2kFs2G"},{"ID":"recrcYOIQtdyR1VVf","Name":"Rebecca Coronis","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/rebeccas-terminator","LinkID":"lnk_1LHi_2kFlZW"},{"ID":"recuzRFg2qineOdif","Name":"Greg Jackson","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/gregs-terminator","LinkID":"lnk_1LHi_2kFlZV"}]';
//$input_json = '[{"action":"linkcreator"},{"ID":"recuzRFg2qineOdif","Name":"Greg Jackson","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"","LinkID":"","image":"https://dl.airtable.com/.attachments/5e04257d3c3a726f89b969731a36ffc8/6bfeb562/Courtney54.jpg"},{"ID":"rec8TYEXKv0JIkWI5","Name":"Ben Jackson","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"","LinkID":"","image":"https://dl.airtable.com/.attachments/5e04257d3c3a726f89b969731a36ffc8/6bfeb562/Courtney54.jpg"},{"ID":"receW4MHxewRxP66u","Name":"Kylie Squire","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"","LinkID":"","image":"https://dl.airtable.com/.attachments/5e04257d3c3a726f89b969731a36ffc8/6bfeb562/Courtney54.jpg"},{"ID":"recdtbmdoq5yGWocB","Name":"Randal Wilson","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"","LinkID":"","image":"https://dl.airtable.com/.attachments/5e04257d3c3a726f89b969731a36ffc8/6bfeb562/Courtney54.jpg"},{"ID":"recF0HUGaZLidAztD","Name":"Steve Gott","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"","LinkID":"","image":"https://dl.airtable.com/.attachments/5e04257d3c3a726f89b969731a36ffc8/6bfeb562/Courtney54.jpg"},{"ID":"recqhk5JxvtQUyDGp","Name":"Teng Li","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"","LinkID":"","image":"https://dl.airtable.com/.attachments/5e04257d3c3a726f89b969731a36ffc8/6bfeb562/Courtney54.jpg"},{"ID":"recSnLBenVGQ24o0i","Name":"Bill Kondylis","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"","LinkID":"","image":"https://dl.airtable.com/.attachments/5e04257d3c3a726f89b969731a36ffc8/6bfeb562/Courtney54.jpg"},{"ID":"recEcYXyeEK3al4tR","Name":"Adrian Garcia","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"","LinkID":"","image":"https://dl.airtable.com/.attachments/5e04257d3c3a726f89b969731a36ffc8/6bfeb562/Courtney54.jpg"}]';
//$input_array = json_decode($input_json, true);


$benew = new FeedMe($input_array);


class FeedMe {

  function __construct($input_array) {

  

  // function to return number of clicks
  if($input_array[0]['action'] == 'linkupdater') {
    //$connector = new ConnectorForMe($input_array, $env);
    //$connector->click_updater($input_array);

    unset($input_array[0]); 
    $input_array = array_values($input_array);
    global $env;
    $parser = new ShortLinkParser($env);
    $parser->getRawClicks()->filterClicks();
    $parser->getClicks($input_array);
    $parser->output();
    return;   
  }
  if($input_array[0]['action'] == 'linkcreator') {
    unset($input_array[0]);
    $input_array = array_values($input_array);
    global $env;
    $connector = new ConnectorForMe($input_array, $env);
    $connector->bulk_link_create();
    $response = $connector->multi_short_it();
    MyFun::console_log('Response from multi short it is: ');
    MyFun::console_log($response);
    $return_airtable = $connector->link_combinator($response, 'nothing');
    $connector->og_combinator($return_airtable);
    MyFun::console_log('Updated input array');
    MyFun::console_log($connector->input_token);
    //array_unshift($this->return_airtable, array('action' => 'linkcreator'));
    echo json_encode($connector->airtable_return);
    return;  
  }
  
  
  }
}


class ConnectorForMe extends ConcreteFoundation {

    public $short_api = "sk_dr6h17exR4jZwOM7";
    public $url = "http://147.182.192.192/";
    public $domain_id = '421680';
    public $domain_path = 'showme.headstudios.com.au';
    public $input_token = array();

    // Leaving values inside the function
    public $response = [];
    public $return_airtable = [];
    public $shortit_injection = [];
    protected $env = [];

    
    
    function image_create($name, $url='og_pizza.jpg') {

        $image = \WideImage\WideImage::loadFromFile($url);
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

              
              
              


            //var_dump(json_decode($response->getBody(),true));    
            
        }

        function multi_short_it() {

          $links_array = $this->shortit_injection;

          if(!isset($this->env['shortio_domain'])) { throw new Exception('Make sure that the class env has the shortio_domain paramater set during construction phase'); }
          $domain = $this->env['shortio_domain'];
          $client = new \GuzzleHttp\Client();

          $input_json = ['links' => $links_array, 'domain'=> $domain];

          $response = $client->request('POST', 'https://api.short.io/links/bulk', [
            //'body' => '{"links":[{"tags":["campaign1"],"allowDuplicates":false,"domain":"showme.headstudios.com.au","originalURL":"https://headstudios.com.au/2022/03/15/5-just-around-the-corner-trends-that-will-make-99-of-property-management-companies-obsolete-in-5-years-and-how-you-can-ride-these-trends-to-complete-market-domination-for-your-real-estate-agency/","path":"johns-help"},{"allowDuplicates":false,"domain":"showme.headstudios.com.au","originalURL":"https://headstudios.com.au/2022/03/15/5-just-around-the-corner-trends-that-will-make-99-of-property-management-companies-obsolete-in-5-years-and-how-you-can-ride-these-trends-to-complete-market-domination-for-your-real-estate-agency/","path":"michaels-help"}],"domain":"showme.headstudios.com.au"}',
              'body' => json_encode($input_json),
            'headers' => [
              'Accept' => 'application/json',
              'Authorization' => 'sk_dr6h17exR4jZwOM7',
              'Content-Type' => 'application/json',
            ],
          ]);

          
          $response_a = json_decode($response->getBody(), true);

          


          
          foreach($response_a as $res) {

            if(isset($res['error'])) { continue; } else {
            $key = array_search($res['path'], array_column($this->input_token, 'path')); }
            MyFun::console_log('Individual res item is: ');
            MyFun::console_log($res);
          
          MyFun::console_log("Inside response_a loop - res is: ");
          MyFun::console_log($res);
          if($key) {
          $this->input_token[$key]['originalURL'] = $res['originalURL'];
          $this->input_token[$key]['secureShortURL'] = $res['secureShortURL'];
          }
        }
          //return json_decode($response->getBody(),true);
          MyFun::console_log('this->response is being set to: ');
          MyFun::console_log(json_decode($response->getBody(), true));
          $this->response = json_decode($response->getBody(),true);

          

          


        

      }

        function bulk_link_create() {

          if(!isset($this->input_token)) { throw new Exception('Make sure to setup input array in constructor which sets input token before calling the bulk link create function'); }

          $shortit_injection = array();

          MyFun::console_log('Input token is: ');
          MyFun::console_log($this->input_token);

          foreach($this->input_token as $record) {

            $key = array_search($record['Name'], array_column($this->input_token, 'Name'));

            MyFun::console_log('Key number for '.$record['ID'].'is : '.$key);
            $name = $record['Name'];
            $name = strtok($name, " ");
            $display_name = $name;
            $name = strtolower($name);
            $name = $name.'s-terminator';
            $url = $record['URL'].'?name='.$display_name;
            $id = $record['ID'];
            MyFun::console_log('Record full name is: '.$record['Name']);
            MyFun::console_log('Record full name when pathed is: '.$this->input_token[$key]['Name']);
            MyFun::console_log('The Path is: '.$name);
            //$record['path'] = $name;
            //$record['displayName'] = $display_name;

            $shortit_injection[$key] = ['allowDuplicates'=> false, 'displayName' => $display_name, 'recordId'=> $id, 'domain' => 'showme.headstudios.com.au', 'originalURL' => $url, 'path'=>$name];
            
            
            


          }

          

          $this->shortit_injection = $shortit_injection;

        }

        function link_combinator($response, $injector) {

          
          $response = $this->response;
          $injector = $this->shortit_injection;

          MyFun::console_log('this->response is: ');
          MyFun::console_log($this->response);
          MyFun::console_log('Injector variable in link combinator is: ');
          MyFun::console_log($this->shortit_injection);


          
         
          foreach($injector as $key=>$value) {

            if(isset($response[$key]['error'])) { continue; }
            $recordId = $injector[$key]['recordId'];

            
            
            
            $shortUrl = $response[$key]['secureShortURL'];
           
            $name = $injector[$key]['displayName'];
           
            $link_id = $response[$key]['idString'];
            
            if(isset($recordId)&&isset($shortUrl)&&isset($link_id)) {
            $airtable_return[$key] = array('recordID' => $recordId,'shortURL' => $shortUrl, 'linkID' => $link_id, 'displayName' => $name);
            $this->input_token[$key]['shortURL'] = $shortUrl;
            $this->input_token[$key]['LinkID'] = $link_id;
            $this->input_token[$key]['displayName'] = $name;
            MyFun::console_log('Airtable return[key] just got placed and it is here:');
            MyFun::console_log($airtable_return[$key]);
            MyFun::console_log('Interestingly enough the original input token key is: ');
            MyFun::console_log($this->input_token[$key]);
            MyFun::console_log('Do you see a match above?');
          
            }

          }

          $this->airtable_return = $airtable_return;

          MyFun::console_log('The final airtable return for $this->airtable_return is:');
          MyFun::console_log($this->airtable_return);
        }

        function og_combinator($injector) {

          MyFun::console_log('Input token is referenced below: ');
          MyFun::console_log($this->input_token);

          $injector = $this->airtable_return;

          MyFun::console_log('Injector for og combinator prior to image create is: ');
          MyFun::console_log($injector);

          

          foreach($this->input_token as $inject) {

            MyFun::console_log('For some strange reason injector combinator is empty yet loop gets played... this is the individual $inject ');
            MyFun::console_log($inject);

            if(isset($inject['displayName'])&&isset($inject['LinkID'])) {

            $img_url = $this->image_create($inject['displayName'],$inject['image']);
            $link_id = $inject['LinkID'];
            $this->OGLinkStatus($link_id, 'Want some DFY Free Investor Leads?', 'What if I could generate you leads from your current past seller list to prioritise follow ups on AUTOPILOT', $img_url);

          }

          }


        }

        function SMS_Voyage_Guzzle($message, $mobile) {

          $client = new GuzzleHttp\Client();
      
          global $voyage_secret;
          $params = ['query' => [
              "from" => 'SMS Dummy',
              "text" => $message,
              "to" => $mobile,
              "api_key" => "d3e293a6",
              "api_secret" => $voyage_secret
          ]
          ];
      
          $response = $client->request('GET','https://rest.nexmo.com/sms/json',$params);
      
          //return $response->getBody();
      
      }

      function click_updater(array $input_array) {

        $connector = new ConnectorForMe('sk_dr6h17exR4jZwOM7', 'http://147.182.192.192/');
         global $click_data;
         $click_data = json_decode($click_data, true);
        
    

    
    
        foreach ( $input_array as $index=> $link ) {
          $input_array[ $index ]['clicks'] = 0;
      
          $long_one = $input_array[$index]['Shortlink'];
          $input_array[$index]['Shortlink'] = substr($long_one, strrpos($long_one, '/'));
        }
        
        
        $click_data = array_filter($click_data, function ($var) {
          return ($var['human'] == true && $var['path'] != '/favicon.ico' && $var['path'] != '/');
        }); 

        foreach ($click_data as $click) {
          $input_index = array_search($click['path'], array_column($input_array, 'Shortlink'));
        
          if ( $input_index ) {
            $input_array[$input_index]['clicks']++;
          }
        
        }

    
    echo json_encode($input_array);
    
    return;


      }

      

}

abstract class ConcreteFoundation {

    public $short_api; // API key for short.ai for shortlink creation
    public $domain_id; // Domain ID for Short.ai 
    public $domain_path; // Path of the Short.io domain without the http
    public $url; // URL for the instance of the app - we should fetch this from ENV.php
    public $input_token; // this keeps track of the input array from AirTable for easy access
    protected $env = [];

    public function __construct($input, array $env) {
      try {
        $this->short_api = $env['shortio_secret'];
        $this->url = $env['url'];
      } catch(Exception $e) { throw new Exception('Short API  and URL are not defined..'); }
        $this->env = $env;
        $this->input_token = $input;
    }

    public function getUrl() {
        echo "URL is: ".$this->url;
    }

    

    // Create image - returns path to complete image using URL
    abstract protected function image_create($name, $url='og_pizza.jpg');

    // Short a URL with the given path - returns Guzzle response 
    abstract protected function short_It($url, $path);

    // Update an existing shortlink with an og:image, og:title and og:description based on LinkID
    abstract protected function OGLinkStatus($link_id, $title, $description, $image);

    // This takes an array and calls the Short.io multi short function and returns the return array
    abstract protected function multi_short_it();

    // This function takes in an AirTable JSON with RecordID's and returns Array for input into short multi link create funciton
    abstract protected function bulk_link_create();

    // This function combines short.io bulk link response and original injection with AirTable record id for a full JSON string to return to AirTable
    abstract protected function link_combinator($response, array $injector);

    // This function takes in an input AirTable array and returns the array with clicks for the values that were entered
    abstract protected function click_updater(array $input_array);

    // Setup OG dynamic image and campaign outline
    // Input: Output of link combinator
    abstract protected function og_combinator($injector);

    // Simple function to send SMS messages - make sure mobiles are formatted as 61412..
    abstract protected function SMS_Voyage_Guzzle($message, $mobile);

  


    public function console_log($output) {
      //$output = 'complaining for no reason';
      $with_script_tags = true;
      $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
      ');';
          if ($with_script_tags) {
              $js_code = '<script>' . $js_code . '</script>';
          }
          echo $js_code;
    }

}


