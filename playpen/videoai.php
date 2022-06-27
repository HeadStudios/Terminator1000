<?php

require "../vendor/autoload.php";
require "../env.php";

Message::MMS();

class myIssue extends Exception {
    public function errorMessage() {
      //error message
      $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
      .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
      return $errorMsg;
    }
  }

//$video_result = AIVideo::videoTest('Robert');
//$video_result = AIVideo::robotUprising('Bob');
//var_dump($video_result);

try {
if(1==1) {
    throw new myIssue("This is an exception being thrown");
}
}
catch(myIssue $e) {
    echo "I'm Idris Alba - and the problem is: ".$e->errorMessage();
}

Messages::MMS('../small.jpg')

class Message {
    static public function MMS($image) {
        if(empty($image)) {
            throw new Exception("NO image bro");
        }
        $client = new GuzzleHttp\Client();
    
        global $voyage_secret;
        $params = [
            'message_type' => 'image',
            'image' => [
                'url' => 'http://147.182.192.192/images/Gavin70.jpg'
            ]
        ]
        
        
        ['query' => [
            "from" => 'SMS Dummy',
            "text" => $message,
            "to" => $mobile,
            "api_key" => "d3e293a6",
            "api_secret" => $voyage_secret
        ]
        ];
    
        $response = $client->request('POST','https://api.nexmo.com/v1/messages',
            GuzzleHttp\RequestOptions::JSON => $params,
            
        );
    
        //return $response->getBody();
    
    }
}

class AIVideo {

    public static function videoTest(string $name = 'there') {

        $client = new GuzzleHttp\Client();
        global $synthesia_key;
        $script_text = "Hi ".$name." and welcome to Guzzle function";
        $post_fields = [
            "test" => true,
            "title" => 'Hello World',
            "description" => 'This video was created with Guzzle',
            "visibility" => 'public',
            "input" => [
                "scriptText" => $script_text,
                "avatar" => 'anna_costume1_cameraA',
                "avatarSettings" => [
                    "voice" => '1364e02b-bdae-4d39-bc2d-6c4a34814968',
                    "style" => 'rectangular',
                    "avatar" => 'anna_costume1_cameraA',
                ],
                "background" => 'off_white',
            ],
        ];

        
        $response = $client->post('https://api.synthesia.io/v2/videos', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => '326833a9a47aae3809b06ac4e5049d98'
            ],
            'json' => $post_fields
        ]);

        return $response->getBody();


    }

    // For now - creating a test Synthesia video for proof of concept - pass the returning ID to Wordpress custom field 
    public static function robotUprising($name) {

    
     $ch = curl_init();
     
     //var_dump ($post_data);
     //$json = json_encode($post_data);
     //echo $json;
     
     curl_setopt($ch, CURLOPT_URL, 'https://api.synthesia.io/v2/videos');
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS, '{ "test": true, "title": "Hello, World!", "description": "This is my first synthetic video, made with the Synthesia API!", "visibility": "public", "input": [ { "scriptText": "Welcome '.$name.', to the real world.", "avatar": "anna_costume1_cameraA", "avatarSettings": { "voice": "1364e02b-bdae-4d39-bc2d-6c4a34814968", "style": "rectangular" },  "background": "off_white" } ] }');
     
     $headers = array();
     $headers[] = 'Authorization: 326833a9a47aae3809b06ac4e5049d98';
     $headers[] = 'Content-Type: application/json';
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     
     $result = curl_exec($ch);
     if (curl_errno($ch)) {
         echo 'Error:' . curl_error($ch);
     }
     curl_close($ch);
     
     $array_result = json_decode($result, true);
     //return $array_result['id'];
     return $array_result;
     
     }
 
 }