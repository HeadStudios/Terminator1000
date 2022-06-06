<?php

require_once("wp-load.php"); // Make sure there are enough dot dot dots
require("connects.php");
require("env.php"); // this is in Gitignore for security reasons, ask me for access and I can provide
require("parsedown.php"); // This is the convert AirTable rich text field to HTML to pass to new WP post function

echo "You are here";

/* This file has been created so that AirTable can pass a JSON field that chooses a function and then the
endpoint can return the data as per the function call. the_vision.php was made for only one data call and
changing it now could risk breaking some of the code - to avoid that risk I've created this new file to 
quickly return a Shortlink based on URL passed using a function called Short_It (from memory) - in connects.php
which has all ready been created and tested. 
*/

$data = json_decode(file_get_contents('php://input'), true);
//$temp_data = '{"title":"John Connor Returns","name":"Sarah Connor","function":1,"excerpt":"The short version","content":"This was generated with a beautiful shortlink. \n\nIt\'s because the woods are scary.\n\nThankfully - now you have... CATARACTS!\n\nWith cataracts you will be\n\n- Scared all the time\n- Never know what to do\n- Always try to find your way\n\nCataracts - sold where all **goods are sold!** \n","bannerhead":"Amazing Offer","headline":"Cataract Appointments Available","subheadline":"Your Doctor Will See You Now","cta_text":"Book your Cataracts Form","cta_link":"https://airtable.com","short_path":"for-you-michael-160"}';
//$data = json_decode($temp_data, true);
$permalink = $data['permalink'];
$contact = $data['contact'];
$campaign_n = 'bowser-'; // This is just a place holder variable as each shortlink should have a campaign name, will make more sense if I explain the application

$campaign = $campaign_n.$contact;

$link_result = short_It($permalink, $campaign);
$arr['shortlink'] = $link_result['shortURL'];
echo json_encode($arr);
