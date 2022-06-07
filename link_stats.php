<?php

require_once("wp-load.php"); // Make sure there are enough dot dot dots
require("connects.php");
require("env.php"); // this is in Gitignore for security reasons, ask me for access and I can provide
require("parsedown.php"); // This is the convert AirTable rich text field to HTML to pass to new WP post function

$data = json_decode(file_get_contents('php://input'), true);

$result = shortIt_stats($data['link_id']);

//var_dump($result);
$result_a = json_decode($result, true);

//echo "JSON array dump";
//var_dump($result_a);

//echo "The total clicks is: ".$result_a['totalClicks'];

$arr['total_clicks'] = $result_a['humanClicks'];


echo json_encode($arr);