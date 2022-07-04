<?php

/*require "../vendor/autoload.php";
require "../env.php";
require "../error.php";*/


class ShortLinkUpdater {

    protected $client;
    protected $raw_clicks;
    protected $env;
    protected $airtable_io;

    function __construct($input_array, $env) {
        $this->client = new GuzzleHttp\Client();
        $this->env = $env;
        $this->airtable_io = $input_array;
    }

    function getRawClicks() {

        try {
        $shortio_secret = $this->env['shortio_secret']; } catch(Exception $e) { throw new Exception('Make sure Shortio_secret is set in env'); } 
        $domain_id = $this->env['shortio_domainid'];
        $url = 'https://api-v2.short.cm/statistics/domain/'.$domain_id.'/last_clicks';

        $response = $this->client->request('POST', $url, [
            'body' => '{"limit":5000}',
            'headers' => [
              'Accept' => '*/*',
              'Authorization' => $shortio_secret,
              'Content-Type' => 'application/json',
            ],
          ]);

        $this->raw_clicks = json_decode($response->getBody(), true);

        return $this; 
    }

    function filterClicks() {

        foreach($this->raw_clicks as $key=>$data) {
            //if($this->raw_clicks[$key]['human'] == false || str_contains($this->raw_clicks[$key]['path'], '.well-known') || $this->raw_clicks[$key]['path'] == '/') {
                if($this->raw_clicks[$key]['human'] == false || strpos($this->raw_clicks[$key]['path'], '.well-known') !== false || $this->raw_clicks[$key]['path'] == '/') {    
            unset($this->raw_clicks[$key]); }
        }

        return $this;

    }

    function getClicks(array $input) {

        $this->airtable_io = $input;

        foreach($this->airtable_io as $index=>$data) {
            $this->airtable_io[$index]['clicks'] = 0;
            $url = $this->airtable_io[$index]['Shortlink'];
            $url = substr($url, strrpos($url, '/'));
            $this->airtable_io[$index]['path'] = $url;
        }

        foreach ($this->raw_clicks as $click) {
            
            $input_index = array_search($click['path'], array_column($this->airtable_io, 'path'));
            
           
            
          
            if ( $input_index !== False ) {
            $this->airtable_io[$input_index]['clicks']++;
            }
          
          }
    }

    function output() {
        $this->airtable_io = array('action'=>'linkupdater', 'data' => $this->airtable_io);
        echo json_encode($this->airtable_io);
    }




}