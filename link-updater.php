<?php

//require_once("wp-load.php"); // Make sure there are enough dot dot dots
require("connects.php");
require("env.php"); // this is in Gitignore for security reasons, ask me for access and I can provide
//require("parsedown.php"); // This is the convert AirTable rich text field to HTML to pass to new WP post function
require("click-vars.php");

//$airtable_array = json_decode(file_get_contents('php://input'), true);
$airtable_array = json_decode($json_raw, true);
$click_array = json_decode($click_data, true);

foreach ( $airtable_array as $index=> $link ) {
    $airtable_array[ $index ]['clicks'] = 0;

    $long_one = $airtable_array[$index]['name'];
    $airtable_array[$index]['name'] = substr( $long_one, 21 );
}

foreach ($click_array as $click) {
    $airtable_index = array_search($click['path'], array_column($airtable_array, 'name'));
  
    if ( $airtable_index ) {
      $airtable_array[$airtable_index]['clicks'] ++;
    }
  
  }

  foreach ( $airtable_array as $index=> $link ) { 
    
    if($airtable_array[ $index ]['clicks'] == 0) {
        unset($airtable_array[ $index ]);
    }

    
}

echo json_encode($airtable_array);





