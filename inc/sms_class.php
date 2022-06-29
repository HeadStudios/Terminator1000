<?php




//$sender = new MySMS($env);
//$sender->filterMob('415 999 212');
//$sender->process($json);
//$sender->sendMsg('+61485826254', 'Nothing can stop us now');

class MySMS {

    protected $api;
    protected $url;
    protected $phoneUtil;

    function __construct($env) {
        $this->api = $env['mysms_key'];
        $this->url = $env['mysms_url'];
        $this->phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
    }

    

    function filterMob($number) {
        $mobObject = $this->phoneUtil->parse('04 12 826 5 69', 'AU');
        
        return str_replace(' ','', $this->phoneUtil->format($mobObject, \libphonenumber\PhoneNumberFormat::NATIONAL));
    }

    function sendMsg($mobile, $message) {
        $client = new GuzzleHttp\Client();
        $url = $this->url;
        $mobile = $this->filterMob($mobile);
        

        $params = [
            'key' => $this->api,
            'number' => $mobile,
            'message' => $message,
            'device' => 1,
            'prioritize' => 1
        ];


        $url = $url.'?'.str_replace('%2B','+',http_build_query($params));
    
        $response = $client->request('GET',$url);
    }

    function process($json) {
        if($json[0]['action']) {
            
            unset($json[0]);
            $json = array_values($json);         
        }
        foreach($json as $key=>$contact) {
            $this->sendMsg($json[$key]['Mobile'], 'Like where the hell do I... really even start?');
            $json[$key]['Status'] = 'Sent';
        }
        
        
        echo json_encode($json);
    }

}