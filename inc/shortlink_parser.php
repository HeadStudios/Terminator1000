<?php

/*require "../vendor/autoload.php";
require "../env.php";
require "../error.php";*/


$input = '[{"action":"linkupdater"},{"ID":"recTAFqIrRzfmpnln","Name":"Andrew Coronis","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/andrews-terminator","LinkID":"lnk_1LHi_2kFs2G"},{"ID":"recrcYOIQtdyR1VVf","Name":"Rebecca Coronis","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/rebeccas-terminator","LinkID":"lnk_1LHi_2kFlZW"},{"ID":"recuzRFg2qineOdif","Name":"Greg Jackson","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/gregs-terminator","LinkID":"lnk_1LHi_2kFlZV"}]';
$input = json_decode($input, true);
unset($input[0]); 
$input = array_values($input);
global $env;
$parser = new ShortLinkParser($env);
$parser->getRawClicks()->filterClicks();
$parser->getClicks($input);
$parser->output();

class ShortLinkParser {

    protected $client;
    protected $raw_clicks;
    protected $env;
    protected $airtable_io;

    function __construct(array $env) {
        $this->client = new GuzzleHttp\Client();
        $this->env = $env;
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
            if($this->raw_clicks[$key]['human'] == false || str_contains($this->raw_clicks[$key]['path'], '.well-known') || $this->raw_clicks[$key]['path'] == '/') {
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
        echo json_encode($this->airtable_io);
    }




}