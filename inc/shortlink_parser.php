<?php


$input_json = '[{"action":"linkcreator"},{"ID":"recpuIDwtkOxhYyLO","Name":"Kosta  Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"","LinkID":"","Mobile":["0412 826 569"]},{"ID":"rec2nv7qKlwU5jmbV","Name":"Kostya Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"","LinkID":"","Mobile":["+61412 826 569"]},{"ID":"recHeks3mMpdTZnvE","Name":"Konstantin Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"","LinkID":"","Mobile":["4128 265 69"]}]';
$input = json_decode($input_json, true);
unset($input[0]);
$input = array_values($input);
global $env;

$parser = new ShortlinkParser($input, $env);
$parser->createShortLinks();
$parser->og_setup();
$parser->input_array = array('action'=>'linkcreator','data'=>$parser->input_array);
echo json_encode($parser->input_array);

class ShortlinkParser {

    protected $short_api;
    public $input_array;
    protected $env;


    public function __construct(array $input, array $env) {

        $this->env = $env;
        $this->input_array = $input;

    }

    public function createShortlinks() {

        $shortit_injection = array();

        foreach($this->input_array as $record) {

            $key = array_search($record['Name'], array_column($this->input_array, 'Name'));

            $name = $record['Name'];
            $name = strtok($name, " ");
            $display_name = $name;
            $name = strtolower($name);
            $name = $name.'s-terminator';
            $url = $record['URL'].'?fname='.$display_name;
            $id = $record['ID'];

            $shortit_injection[$key] = ['allowDuplicates'=> false, 'displayName' => $display_name, 'recordId'=> $id, 'domain' => 'showme.headstudios.com.au', 'originalURL' => $url, 'path'=>$name];
            $this->input_array[$key]['path'] = $name;
            $this->input_array[$key]['displayName'] = $display_name;



        }

        $domain = $this->env['shortio_domain'];

        $client = new \GuzzleHttp\Client();

        $input_json = ['links' => $shortit_injection, 'domain'=> $domain];

        $response = $client->request('POST', 'https://api.short.io/links/bulk', [
              'body' => json_encode($input_json),
            'headers' => [
              'Content-Type' => 'application/json',
              'Authorization' => $this->env['shortio_secret']
            ],
          ]);

          $response = json_decode($response->getBody(), true);

          foreach($response as $res) {

            if(isset($res['error'])) { continue; } else {
                $key = array_search($res['path'], array_column($this->input_array, 'path'));
                $this->input_array[$key]['originalURL'] = $res['originalURL'];
                $this->input_array[$key]['secureShortURL'] = $res['secureShortURL'];
                $this->input_array[$key]['LinkID'] = $res['idString'];
                
            }
          
  


        }




    }
    
    function og_setup() {

        foreach($this->input_array as $inject) {

            if(isset($inject['displayName'])&&isset($inject['LinkID'])) {

                $img_url = $this->image_create($inject['displayName']);

                $link_id = $inject['LinkID'];

                $this->OGLinkStatus($link_id, 'Want some DFY Free Investor Leads?', 'What if I could generate you leads from your current past seller list to prioritise follow ups on AUTOPILOT', $img_url);


            }

        }
    }

    function OGLinkStatus($link_id, $title, $description, $image) {
            
        $shortio_secret = $this->env['shortio_secret'];
        $domainid = $this->env['shortio_domainid'];
        $post_url = 'https://api.short.io/links/opengraph/'.$domainid.'/'.$link_id;

        $client = new GuzzleHttp\Client();

        $short_data = [
            "title" => $title,
            "description" => $description,
            "image" => $image,
            "image:type" => 'image/jpg'
        ];

        $shortnweird = '[["title","'.$title.'"],["description", "'.$description.'"],["image","'.$image.'"],["image:type","image/jpg"]]';

          $response = $client->request('PUT', $post_url, [
            'body' => $shortnweird,
            'headers' => [
              'Accept' => 'application/json',
              'Authorization' => $shortio_secret,
              'Content-Type' => 'application/json',
            ],
          ]);
        
    }

    function image_create($name, $url='og_pizza.jpg') {

        $image = \WideImage\WideImage::loadFromFile($url);
        $canvas = $image->getCanvas();
        $canvas->useFont('../fonts/arialblack.ttf', 100, $image->allocateColor(76, 75, 75)); 
        $canvas->writeText('42', '135', $name);
        $file = '../images/'.$name.rand(1,100).'.jpg';
        $file = str_replace(' ', '_', $file);
        $image->saveToFile($file);
        $complete = $this->env['url'].$file;
        return $complete;

    }

}

