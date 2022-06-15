<?php


$cookie = new Enchilada();
$result = $cookie->newCustomPost('We Are Live', 'And this is our War Room');

var_dump($result);

class Enchilada {

    function newCustomPost($custom_title, $content) {

        // All the globals are found in env.php which is in .gitignore so ask me for the codes otherwise this won't work, codes are on need to know basis to reduce risk - hope you understand
        global $wp_bearer;
        
        $post_data = [
            "title" => $custom_title,
            "content" => $content,
            "excerpt" => "This is some short text",
            "status" => "publish"
        ];
        
    
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, 'https://staging2.conveyancingqld.com/wp-json/wp/v2/for-you');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
        
        $headers = array();
        $auth = 'Authorization: Basic '.$wp_bearer;
        $headers[] = $auth;
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        
        //$id = $result['id'];
        //$json_result = json_decode($result);
        //return $json_result['link'];
        return $result;
        
    }


}