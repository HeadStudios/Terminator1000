<?php

/*require "../vendor/autoload.php";
require "../env.php";
require "../error.php";*/

/*$json_loader = '{"Form":{"Id":"1","InternalName":"BasicContactForm","Name":"Basic Contact Form"},"$version":7,"$etag":"W/\"datetime\'2022-06-21T09%3A57%3A10.6132917Z\'\"","Clientcompany":"Brombie Place","CommentsOrQuestions":"WHat do you think?","Clientname":"John Michaels","WebsiteURL":"https://yourclientco.com.au","Products":[{"Id":"GVyrm","ProductName":"Product 1 Name","ProductFeature":"Product 1 Feature","ProductBenefit":"Product 1 Benefit","Items":"Product 1","ItemNumber":1},{"Id":"4v4amR","ProductName":"Product 2 Name","ProductFeature":"Product 2 Feature","ProductBenefit":"Product 2 Benefit","Items":"Product 2","ItemNumber":2}],"Emailbody":"Hi John,\n\nReady to get started *are you ready sir?*\n\nBecause the _party has just begun_ .\n\nGood luck!","Execsummary":"At John Michaels bad things are happening - and we are fixing those bad things!","Clientaddress":"132 Ashford Lane, Ashworth QLD 2000","Date":"2022-06-21","Stakeholders":[{"Id":"6ISd2","Name":"Michael","Position":"CEO","Contact":"Michael Brombery","Responsibility":"Look after everything","ItemNumber":1}],"Schedule":[{"Id":"1yYLtu","Activity":"Get it done","Description":"Get the whole thing done","Date2":"2022-06-21","ItemNumber":1}],"Terms":[{"Id":"GBtS0","Headline":"Video Length","Description":"Video content is charged by video length. This agreement assumed a total length of up to 30 seconds per video for 5 videos.","Terms":"Video Length","ItemNumber":1},{"Id":"3CaZ5D","Headline":"Satisfaction Guarantee","Description":"As this is the first project - if at any point you feel your expectations are not met simply email through and request a refund and it will be granted - I’ll even let you keep the sub brand.","Terms":"Satisfaction Guarantee","ItemNumber":2},{"Id":"2rvFN8","Headline":"Termination","Description":"This Agreement may be terminated by either Party at any time for any cause deemed reasonable,\nprovided that the terminating Party issues a termination notice to the other Party by email. Any\nlanding pages and domains created as part of this agreement then become property of Head\nStudios.","Terms":"Termination","ItemNumber":3}],"Entry":{"AdminLink":"https://www.cognitoforms.com/HeadStudios1/1/entries/8","DateCreated":"2022-06-21T09:50:47.843Z","DateSubmitted":"2022-06-21T09:50:47.796Z","DateUpdated":"2022-06-21T09:57:10.38Z","EditLink":"https://www.cognitoforms.com/HeadStudios1/BasicContactForm#VaTmgvSFTKhmt0ZnjpXnHv2-7YxG0fE7W4d-l3Rg1HI$*","IsBeta":true,"LastPageViewed":null,"Number":8,"Order":null,"Origin":{"City":null,"CountryCode":null,"IpAddress":"202.0.188.100","IsImported":false,"Region":null,"Timezone":null,"UserAgent":"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36"},"Timestamp":"2022-06-21T09:50:47.796Z","Version":2,"ViewLink":"https://www.cognitoforms.com/HeadStudios1/BasicContactForm#ww_b3bF2m-Zz7a78Jib2clcgkjzdJaNZV6MffK5fkUE$*","Status":"Submitted","Document1":"https://www.cognitoforms.com/d/T-ePMCsVsEGSeY9MIsr5kA?code=rAMNd0qOssIFsORUPVcdP4UsKDwJGyuI0nO5CZ_DrQ0$","Document2":"https://www.cognitoforms.com/d/T-ePMCsVsEGSeY9MIsr5kA?code=wAwdbhFarOZCZQUDPBbK4GestDhaLuO-bDKxyWRKYiE$"},"Id":"1-8"}';
$json_loader = json_decode($json_loader, true);
$zclient = new GuzzleHttp\Client();
$zoho = new ZohoInvoice('1000.26a6ccbee8218bc4f46b1fa0b0917b5e.c95eef8777240d4d56a61481fffe3807');
$zoho->getID();

$contact_id = $zoho->getContactIDByEmail('enquiries@headstudios.com.au');

$line_items = ['customer_id' => '20028000001009031', 'line_items' => [
    [
        //'item_id' => '20028000001168016',
        'name' => 'Big Gizmo',
        'description' => 'This will allow you to see',
        'rate' => 899,
        'quantity' => 2
    ],
    [
        //'item_id' => '20028000001168016',
        'name' => 'Cool Gizmo',
        'description' => 'This will allow you to hear',
        'rate' => 1299,
        'quantity' => 2
    ],
    [
        //'item_id' => '20028000001168016',
        'name' => 'Awesome Gizmo',
        'description' => 'This will allow you to understand',
        'rate' => 1299,
        'quantity' => 1
    ]
    
]];

$filtered = $zoho->lineItemParser($json_loader['Products']); */


//$zoho->createInvoiceDraft($line_items, $contact_id);

class ZohoInvoice {

    protected $access_token = '';
    protected $client;
    protected $auth;
    protected $headers;
    public $org_id;
    

    function __construct($token) {
        $this->access_token = $token;
        $this->client = new GuzzleHttp\Client();
        $this->headers = [
            'Authorization' => 'Zoho-oauthtoken '.$token,
            'Content-Type' => 'application/json'
        ];
        $this->org_id = $this->getID();

      
        
    }

    function getID() {
        //https://books.zoho.com/api/v3/organizations
        try {
        $response = $this->client->get('https://books.zoho.com/api/v3/organizations', [
            'headers' => $this->headers
        ]); } catch(Exception $e) {
            throw new Exception("Your token is most likely wrong - test ".$this->access_token." inside Insomnia");
        }

        $response = json_decode($response->getBody(),true);

        

        return $response['organizations'][0]['organization_id'];
    }

    function getContacts() {
        if(!isset($this->org_id)) { throw new Exception("Please set the org_id variable before calling getContacts function"); }
        try {
            $url = 'https://books.zoho.com/api/v3/contacts?organization_id='.$this->org_id;
            $response = $this->client->get($url, [
                'headers' => $this->headers
            ]); 
        } catch(Exception $e) {
                throw new Exception("Your token is most likely wrong - test ".$this->access_token." inside Insomnia");
            }
    
            $response = json_decode($response->getBody(),true);
            return $response;

    }

    function getContactIDByEmail(string $email)  {

        $contacts = $this->getContacts();
        $key = array_search($email, array_column($contacts['contacts'], 'email'));
        if(!isset($key)) { throw new Exception("No contact with the email: ".$mail); }
        $id = $contacts['contacts'][$key]['contact_id'];
        return $id;
    }

    function createInvoiceDraft(array $line_items, $customer_id) {



       // if(!isset($line_items[0]['name'])||!isset($line_items[0]['description'])||!isset($line_items[0]['rate'])||!isset($line_items[0]['quantity'])) { throw new Exception("Please check line_items argument of createInvoiceDraft has name, description, rate and quantity keys"); }
        if(!isset($customer_id)) { throw new Exception("Customer ID is not set to create Draft Invoice"); }


        if(!isset($line_items['customer_id'])) {
            $line_items = ['customer_id' => $customer_id, 'line_items' => $line_items];
        }
        
        try {
            $url = 'https://books.zoho.com/api/v3/invoices?organization_id='.$this->org_id;
            $response = $this->client->post($url, [
                'headers' => $this->headers,
                'json' => $line_items
            ]); 
        } catch(Exception $e) {
                throw new Exception("Invoice creation has gone wrong - here is what we know: ".$e->getMessage().json_encode($line_items));
            }
        

    }

    function lineItemParser($line_items) {
        
        $finished_line_items = [];
        foreach($line_items as $line_item) {

            if($line_item['ProductName']) {
                $key = array_search($line_item['ProductName'], array_column($line_items, 'ProductName'));
            } else {
            $key = array_search($line_item['name'], array_column($line_items, 'name')); }

            if(!isset($line_item['item_id'])) {
                //$line_items[$key]['item_id'] = '20028000001168016';
                $line_items[$key]['item_id'] = '20028000001168016';
            }
            if(!isset($line_item['rate'])) {
                //$line_items[$key]['item_id'] = '20028000001168016';
                $line_items[$key]['rate'] = 500;
            }
            if(!isset($line_item['quantity'])) {
                //$line_items[$key]['item_id'] = '20028000001168016';
                $line_items[$key]['quantity'] = 1;
            }
            if(isset($line_item['ProductName'])) {
                $line_items[$key]['name'] = $line_item['ProductName'];
                try {
                $line_items[$key]['description'] = $line_item['ProductFeature'].' - '.$line_item['ProductBenefit'];
                } catch(Exception $e) {
                    throw new Exception("Check to make sure ProductFeature and ProductBenefit is set");
                }

            }
            
        }

        return $line_items;
    }

}