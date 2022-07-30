<?php
require "vendor/autoload.php";
require "env.php";
require "error.php";
require "inc/zohoinvoice.php";
//error_reporting(error_reporting() & ~E_DEPRECATED);

$Parsedown = new Parsedown();
//$Parsedown = new Parsedown();
//echo $Parsedown->text('Hello _Parsedown_!');
//die();
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04 
 */

// Include the main TCPDF library (search for installation path).
require 'vendor/autoload.php';
//require 'fpdf/fpdf.php';
global $env;
//$json_loader = '[{"id":"22","item_key":"s9br8","name":["Brian Gumble","Jessica Almond"],"description":["Get all the info","Get the ball moving","Kick the ball out of the park","This is the process by which we kick the ball over the wall"],"ip":"202.0.188.100","form_id":"3","post_id":"0","user_id":"1","parent_item_id":"0","is_draft":"0","updated_by":"1","created_at":"2022-07-02 05:25:35","updated_at":"2022-07-04 09:43:25","clientname":"Michael Berner","dgh33":"m.berner@gmail.com","clientcompany":"Berner Company & Co","websiteurl":"https:\/\/bernercandles.com.au","date":"July 13, 2022","date-value":"2022-07-13","clientaddress":"34 Berner Avenue, Bromengham 2012 QLD","emailbody":"Hey Joh,\r\n\r\nAre you ready for the real? \r\n\r\nThen let\'s do it!","execsummary":"It seems that we are in a strange position - the issue is:\r\n\r\n*Issue here*\r\nAnd we will fix it!","products":{"form":"4","i11":{"productname":"Product Name #1","productfeature":"Product Feature #1","productbenefit":"Product Benefit #1"},"i12":{"productname":"Product Name #2","productfeature":"Product Feature #2 - Description here","productbenefit":"Product Benefit #2 - Description here and here."},"i13":{"productname":"Product Name #3","productfeature":"Product Feature #3 - Description here and here.","productbenefit":"Product Benefit #3 - Description here and here."}},"productname":["Product Name #1","Product Name #2","Product Name #3"],"productfeature":["Product Feature #1","Product Feature #2 - Description here","Product Feature #3 - Description here and here."],"productbenefit":["Product Benefit #1","Product Benefit #2 - Description here and here.","Product Benefit #3 - Description here and here."],"stakeholders":{"form":"5","i14":{"name":"Brian Gumble","position":"Principal","contact":"0415932797 \/ j.smith@gmail.com","responsibility":"Make it real"},"i15":{"name":"Jessica Almond","position":"Property Manager","contact":"0432 451 332 \/ j.almond@headstudios.com.au","responsibility":"Oversee and make sure everything works well"}},"position":["Principal","Property Manager"],"contact":["0415932797 \/ j.smith@gmail.com","0432 451 332 \/ j.almond@headstudios.com.au"],"responsibility":["Make it real","Oversee and make sure everything works well"],"schedule":{"form":"7","i16":{"activity":"Start the Ball","description":"Get all the info","date2":"July 8, 2022","date2-value":"2022-07-08"},"i17":{"activity":"Roll the Ball","description":"Get the ball moving","date2":"July 14, 2022","date2-value":"2022-07-14"},"i18":{"activity":"Ball the Wall","description":"Kick the ball out of the park","date2":"July 22, 2022","date2-value":"2022-07-22"},"i31":{"activity":"Kick the ball over the wall","description":"This is the process by which we kick the ball over the wall","date2":"July 21, 2022","date2-value":"2022-07-21"}},"activity":["Start the Ball","Roll the Ball","Ball the Wall","Kick the ball over the wall"],"date2":["July 8, 2022","July 14, 2022","July 22, 2022","July 21, 2022"],"date2-value":["2022-07-08","2022-07-14","2022-07-22","2022-07-21"],"terms":{"form":"6","i19":{"headline":"Headline #1","description2":"Make sure you play ball"},"i20":{"headline":"Headline #2","description2":"Make sure you dunk the ball in"},"i21":{"headline":"Headline #3","description2":"Make sure you don\'t stumble"}},"headline":["Headline #1","Headline #2","Headline #3"],"description2":["Make sure you play ball","Make sure you dunk the ball in","Make sure you don\'t stumble"],"6ecxf":"username","6ecxf-value":"1"}]';
//$json_loader = json_decode(file_get_contents('php://input'), true);
//$formidable_loader = json_decode($json_loader);
$json_loader = '[
    {
      "id": "22",
      "item_key": "s9br8",
      "name": [
        "Brian Gumble\n",
        "Jessica Almond\n"
      ],
      "description": [
        "Get all the info\n",
        "Get the ball moving\n",
        "Kick the ball out of the park\n",
        "This is the process by which we kick the ball over the wall\n"
      ],
      "ip": "202.0.188.100",
      "form_id": "3",
      "post_id": "0",
      "user_id": "1",
      "parent_item_id": "0",
      "is_draft": "0",
      "updated_by": "1",
      "created_at": "2022-07-02 05:25:35",
      "updated_at": "2022-07-07 07:09:29",
      "clientname": "Michael Canotstandit",
      "dgh33": "m.berner@gmail.com",
      "clientcompany": "Berner Company & Co",
      "websiteurl": "https://bernercandles.com.au",
      "date": "July 13, 2022",
      "date-value": "2022-07-13",
      "clientaddress": "34 Berner Avenue, Bromengham 2012 QLD",
      "emailbody": "Hey Joh,\nAre you ready for the real? \nThen let\'s do it!\n",
      "emailbody-value": "Hey Joh,\r\n\r\nAre you ready for the real? \r\n\r\nThen let\'s do it!",
      "execsummary": "It seems that we are in a strange position - the issue is:\n*Issue here*\nAnd we will fix it!\n",
      "execsummary-value": "It seems that we are in a strange position - the issue is:\r\n\r\n*Issue here*\r\nAnd we will fix it!",
      "products": {
        "form": "4",
        "i11": {
          "productname": "Product Name #1\n",
          "productname-value": "Product Name #1",
          "productfeature": "Product Feature #1 - 5 July\n",
          "productfeature-value": "Product Feature #1 - 5 July",
          "productbenefit": "Product Benefit #1\n",
          "productbenefit-value": "Product Benefit #1"
        },
        "i12": {
          "productname": "Product Name #2\n",
          "productname-value": "Product Name #2",
          "productfeature": "Product Feature #2 - Description here\n",
          "productfeature-value": "Product Feature #2 - Description here",
          "productbenefit": "Product Benefit #2 - Description here and here.\n",
          "productbenefit-value": "Product Benefit #2 - Description here and here."
        },
        "i13": {
          "productname": "Product Name #3\n",
          "productname-value": "Product Name #3",
          "productfeature": "Product Feature #3 - Description here and here.\n",
          "productfeature-value": "Product Feature #3 - Description here and here.",
          "productbenefit": "Product Benefit #3 - Description here and here.\n",
          "productbenefit-value": "Product Benefit #3 - Description here and here."
        }
      },
      "productname": [
        "Product Name #1\n",
        "Product Name #2\n",
        "Product Name #3\n"
      ],
      "productname-value": [
        "Product Name #1",
        "Product Name #2",
        "Product Name #3"
      ],
      "productfeature": [
        "Product Feature #1 - 5 July\n",
        "Product Feature #2 - Description here\n",
        "Product Feature #3 - Description here and here.\n"
      ],
      "productfeature-value": [
        "Product Feature #1 - 5 July",
        "Product Feature #2 - Description here",
        "Product Feature #3 - Description here and here."
      ],
      "productbenefit": [
        "Product Benefit #1\n",
        "Product Benefit #2 - Description here and here.\n",
        "Product Benefit #3 - Description here and here.\n"
      ],
      "productbenefit-value": [
        "Product Benefit #1",
        "Product Benefit #2 - Description here and here.",
        "Product Benefit #3 - Description here and here."
      ],
      "stakeholders": {
        "form": "5",
        "i14": {
          "name": "Brian Gumble\n",
          "name-value": "Brian Gumble",
          "position": "Principal\n",
          "position-value": "Principal",
          "contact": "0415932797 / j.smith@gmail.com\n",
          "contact-value": "0415932797 / j.smith@gmail.com",
          "responsibility": "Make it real\n",
          "responsibility-value": "Make it real"
        },
        "i15": {
          "name": "Jessica Almond\n",
          "name-value": "Jessica Almond",
          "position": "Property Manager\n",
          "position-value": "Property Manager",
          "contact": "0432 451 332 / j.almond@headstudios.com.au\n",
          "contact-value": "0432 451 332 / j.almond@headstudios.com.au",
          "responsibility": "Oversee and make sure everything works well\n",
          "responsibility-value": "Oversee and make sure everything works well"
        }
      },
      "name-value": [
        "Brian Gumble",
        "Jessica Almond"
      ],
      "position": [
        "Principal\n",
        "Property Manager\n"
      ],
      "position-value": [
        "Principal",
        "Property Manager"
      ],
      "contact": [
        "0415932797 / j.smith@gmail.com\n",
        "0432 451 332 / j.almond@headstudios.com.au\n"
      ],
      "contact-value": [
        "0415932797 / j.smith@gmail.com",
        "0432 451 332 / j.almond@headstudios.com.au"
      ],
      "responsibility": [
        "Make it real\n",
        "Oversee and make sure everything works well\n"
      ],
      "responsibility-value": [
        "Make it real",
        "Oversee and make sure everything works well"
      ],
      "schedule": {
        "form": "7",
        "i16": {
          "activity": "Start the Ball\n",
          "activity-value": "Start the Ball",
          "description": "Get all the info\n",
          "description-value": "Get all the info",
          "date2": "July 8, 2022",
          "date2-value": "2022-07-08"
        },
        "i17": {
          "activity": "Roll the Ball\n",
          "activity-value": "Roll the Ball",
          "description": "Get the ball moving\n",
          "description-value": "Get the ball moving",
          "date2": "July 14, 2022",
          "date2-value": "2022-07-14"
        },
        "i18": {
          "activity": "Ball the Wall\n",
          "activity-value": "Ball the Wall",
          "description": "Kick the ball out of the park\n",
          "description-value": "Kick the ball out of the park",
          "date2": "July 22, 2022",
          "date2-value": "2022-07-22"
        },
        "i31": {
          "activity": "Kick the ball over the wall\n",
          "activity-value": "Kick the ball over the wall",
          "description": "This is the process by which we kick the ball over the wall\n",
          "description-value": "This is the process by which we kick the ball over the wall",
          "date2": "July 21, 2022",
          "date2-value": "2022-07-21"
        }
      },
      "activity": [
        "Start the Ball\n",
        "Roll the Ball\n",
        "Ball the Wall\n",
        "Kick the ball over the wall\n"
      ],
      "activity-value": [
        "Start the Ball",
        "Roll the Ball",
        "Ball the Wall",
        "Kick the ball over the wall"
      ],
      "description-value": [
        "Get all the info",
        "Get the ball moving",
        "Kick the ball out of the park",
        "This is the process by which we kick the ball over the wall"
      ],
      "date2": [
        "July 8, 2022",
        "July 14, 2022",
        "July 22, 2022",
        "July 21, 2022"
      ],
      "date2-value": [
        "2022-07-08",
        "2022-07-14",
        "2022-07-22",
        "2022-07-21"
      ],
      "terms": {
        "form": "6",
        "i19": {
          "headline": "Headline #1\n",
          "headline-value": "Headline #1",
          "description2": "Make sure you play ball\n",
          "description2-value": "Make sure you play ball"
        },
        "i20": {
          "headline": "Headline #2\n",
          "headline-value": "Headline #2",
          "description2": "Make sure you dunk the ball in\n",
          "description2-value": "Make sure you dunk the ball in"
        },
        "i21": {
          "headline": "Headline #3\n",
          "headline-value": "Headline #3",
          "description2": "Make sure you don\'t stumble\n",
          "description2-value": "Make sure you don\'t stumble"
        }
      },
      "headline": [
        "Headline #1\n",
        "Headline #2\n",
        "Headline #3\n"
      ],
      "headline-value": [
        "Headline #1",
        "Headline #2",
        "Headline #3"
      ],
      "description2": [
        "Make sure you play ball\n",
        "Make sure you dunk the ball in\n",
        "Make sure you don\'t stumble\n"
      ],
      "description2-value": [
        "Make sure you play ball",
        "Make sure you dunk the ball in",
        "Make sure you don\'t stumble"
      ],
      "6ecxf": "username",
      "6ecxf-value": "1"
    }
  ]';
$json_loader = json_decode($json_loader, true);
//$json_loader = json_decode($json_loader, true);

$json_loader = array_change_key_case($json_loader,CASE_LOWER);
$json_loader = $json_loader[0]; // remove this if not using Formidable Forms




//var_dump($json_loader);
//die();
/* echo '<pre>';
var_dump(json_decode($json_loader, true));
echo '</pre>';

die(); */

$array_input = array(

    'client_name' => 'Andrew Coronis',
    'client_company' => 'Coronis Real Estate'

);

$product_array = [['name' => 'Product Namerrr 1', 'feature' => 'Product Feature 1', 'benefit' => 'Product Benefit 1'],
                    ['name' => 'Product Name 2', 'feature' => 'Product Feature 2', 'benefit' => 'Product Benefit 2'],
                    ['name' => 'Product Name 3', 'feature' => 'Product Feature 3', 'benefit' => 'Product Benefit 3']];

/*
echo '<pre>';
var_dump($product_array);
echo '</pre>';

echo '<pre>';
var_dump($json_loader['products']);
echo '</pre>';
*/


$beveller = new In_n_Out($json_loader);
//$beveller->talk_your_shit();

class In_n_Out {

    protected $its_all_mine = array();
   
    function __construct($the_cut) {

        

            //echo "I see you Mr. Sharpe!";

            $this->its_all_mine = $the_cut;

        
    
    }

    function cleanseFormidableArray(array $input) {
        unset($input['form']);
        $input = array_values($input);
        return $input;
    }

    function talk_your_shit() {

        var_dump($this->its_all_mine);

    }

    function terms_spit($terms_array) {

        $terms_array = $this->cleanseFormidableArray($terms_array);
        $terms_html = '';

        foreach($terms_array as $term) {

            $headline = $term['headline'];
            $description = $term['description2'];

            $terms_html .= '<h3>'.$headline.'</h3>
            <p>'.$description.'</p>';

        }        
        return $terms_html;

    }

    function table_spit($table_array,$num=1) {

        $table_array = $this->cleanseFormidableArray($table_array);

       //$table = '<table>';
       if($num==1) {
       $table = '';
       foreach($table_array as $keybit) {

            $table .= '<tr>';
            $table .= '<td>'.$keybit['productname'].'</td>';
            $table .= '<td>'.$keybit['productfeature'].'</td>';
            $table .= '<td>'.$keybit['productbenefit'].'</td>';
            $table .= '</tr>';

        }
        //$table .= '</table>';
        return $table;
        }
        if($num==2) {
        $table = '';
        foreach($table_array as $keybit) {

            $table .= '<tr>';
            $table .= '<td>'.$keybit['name'].'</td>';
            $table .= '<td>'.$keybit['position'].'</td>';
            $table .= '<td>'.$keybit['contact'].'</td>';
            $table .= '<td>'.$keybit['responsibility'].'</td>';
            $table .= '</tr>';

        }
        //$table .= '</table>';
        return $table;
        }
        if($num==3) {
            $table = '';
            foreach($table_array as $keybit) {
    
                $table .= '<tr>';
                $table .= '<td>'.$keybit['activity'].'</td>';
                $table .= '<td>'.$keybit['description'].'</td>';
                $table .= '<td>'.$keybit['date2'].'</td>';
                $table .= '</tr>';
    
            }
            //$table .= '</table>';
            return $table;
        }

        
    }


function in_n_out($html, $parser) {

   

    $my_html = $html;

    //if(isset($this->its_all_mine['clientname'])) {

        // Provides: <body text='black'>
        // Use this as a key code for naming of form fields in Incognito or anyone that submits
        $my_html = str_replace("{{client_name}}", $this->its_all_mine['clientname'] , $my_html);
        //echo "Client name is....".$this->its_all_mine['clientname'];
        $my_html = str_replace("{{client_company}}", $this->its_all_mine['clientcompany'] , $my_html);
        $my_html = str_replace("{{date}}", $this->its_all_mine['date'] , $my_html);
        $my_html = str_replace("{{client_address}}", $this->its_all_mine['clientaddress'] , $my_html);
        $my_html = str_replace("{{email_body}}", nl2br($parser->text($this->its_all_mine['emailbody'])) , $my_html);
        $my_html = str_replace("{{executive_summary}}", $parser->text($this->its_all_mine['execsummary']) , $my_html);

    //}

    return $my_html;



}



}

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// set document information
/*
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 006');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');*/

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
//$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

// create some HTML content
$html = '<h1>HTML Example</h1>
Some special characters: &lt; € &euro; &#8364; &amp; è &egrave; &copy; &gt; \\slash \\\\double-slash \\\\\\triple-slash
<h2>List</h2>
List example:
<ol>
    <li><img src="images/logo_example.png" alt="test alt attribute" width="30" height="30" border="0" /> test image</li>
    <li><b>bold text</b></li>
    <li><i>italic text</i></li>
    <li><u>underlined text</u></li>
    <li><b>b<i>bi<u>biu</u>bi</i>b</b></li>
    <li><a href="http://www.tecnick.com" dir="ltr">link to http://www.tecnick.com</a></li>
    <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.<br />Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</li>
    <li>SUBLIST
        <ol>
            <li>row one
                <ul>
                    <li>sublist</li>
                </ul>
            </li>
            <li>row two</li>
        </ol>
    </li>
    <li><b>T</b>E<i>S</i><u>T</u> <del>line through</del></li>
    <li><font size="+3">font + 3</font></li>
    <li><small>small text</small> normal <small>small text</small> normal <sub>subscript</sub> normal <sup>superscript</sup> normal</li>
</ol>
<dl>
    <dt>Coffee</dt>
    <dd>Black hot drink</dd>
    <dt>Milk</dt>
    <dd>White cold drink</dd>
</dl>
<div style="text-align:center">IMAGES<br />
<img src="images/logo_example.png" alt="test alt attribute" width="100" height="100" border="0" />
</div>';

// output the HTML content
//$pdf->writeHTML($html, true, false, true, false, '');

$pdf->AddPage();
$html = '<h1>We are on a new page</h1>';
//  $pdf->writeHTML($html, true, false, true, false, '');
//$pdf->AddPage();
$html = '<h1><span style="color: #0b6374;"><strong>Video AI Rent Roll Acceleration System</strong></span></h1>
<h3>PREPARED FOR</h3>
<span style="color: #424242;">{{client_name}}</span><br />
<span style="color: #424242;">{{client_company}}</span>
<h3>PREPARED BY</h3>
<p><span style="color: #424242;">Kosta Kondratenko</span></p>
<p style="text-align: right;"><span style="color: #424242;">{{date}}</span></p>
<h3 style="text-align: right;">{{client_name}}</h3>
<h3 style="text-align: right;">{{client_company}}</h3>
<p style="text-align: right;"><span style="color: #31394d;">{{client_address}}</span></p>
<p><span style="color: #424242;">Dear {{client_name}},</span></p>
<p><span style="color: #424242;">{{email_body}}</span></p>
<p><span style="color: #424242;">Yours Truly,</span><br /><span style="color: #424242;">Kosta Kondratenko</span></p>
<p><span style="color: #0b6374;"><strong>EXECUTIVE SUMMARY</strong></span></p>
<p><span style="color: #424242;">{{executive_summary}}</span></p>
<div>
</div>
<style>table, th, td {
    border: 0px solid black;
  }</style>
<h1>1. Understanding the Challenge</h1>
<p><span style="color: #424242;">[Company Name] wishes to accelerate its growth and increase the volume of outbound activity - however at the moment it doesn&rsquo;t know what those metrics are. Also - balancing outbound activity with operational activity is challenging as it&rsquo;s not easy to see how much availability staff has for the week.&nbsp;</span></p>
<p><span style="color: #424242;">Also staff motivation is a challenge since it&rsquo;s difficult to get a read of current open work orders to load balance outreach efforts with property management efforts.&nbsp;</span></p>
<h1>2. Proposed Solution</h1>
<p><span style="color: #424242;">In order to understand [Company Name]&rsquo;s current situation the following 1st principle metrics will be made available in the following categories:</span></p>
<div>
<table style="border:1px black !important;">
<tbody>
<tr>
<td><span><strong>Product</strong></span></td>
<td><span><strong>Description</strong></span></td>
<td><span><strong>Benefit</strong></span></td>
</tr>
'.$beveller->table_spit($json_loader['products']).'
</tbody>
</table>
</div>
<h1>3. Stakeholders</h1>
<p><span style="color: #424242;">Below will be the direct contact details of the Stakeholders involved in the Dashboard deliverable as well as their roles (minor and more major)</span></p>
<div>
<table>
<tbody>
<tr>
<td><span><strong>Stakeholder Name</strong></span></td>
<td><span><strong>Position</strong></span></td>
<td><span><strong>Best Contact Details</strong></span></td>
<td><span><strong>Responsibility</strong></span></td>
</tr>
'.$beveller->table_spit($json_loader['stakeholders'],2).'
</tbody>
</table>
</div>
<h1>8. Proposed Schedule</h1>
<div>
<table>
<tbody>
<tr>
<td><span><strong>Project Activity</strong></span></td>
<td><strong>Description</strong></td>
<td><span><strong>Date of Completion</strong></span></td>
</tr>
'.$beveller->table_spit($json_loader['schedule'],3).'
</tbody>
</table>
</div>
<h1>7. Terms &amp; Conditions</h1>
'.$beveller->terms_spit($json_loader['terms']);
$pdf->writeHTML($beveller->in_n_out($html, $Parsedown), true, false, true, false, '');
//$pdf->writeHTML($html, true, false, true, false, '');
//$pdf->AddPage();


// output some RTL HTML content
$html = '<div style="text-align:center">The words &#8220;<span dir="rtl">&#1502;&#1494;&#1500; [mazel] &#1496;&#1493;&#1489; [tov]</span>&#8221; mean &#8220;Congratulations!&#8221;</div>';
//$pdf->writeHTML($html, true, false, true, false, '');

// test some inline CSS
$html = '<p>This is just an example of html code to demonstrate some supported CSS inline styles.
<span style="font-weight: bold;">bold text</span>
<span style="text-decoration: line-through;">line-trough</span>
<span style="text-decoration: underline line-through;">underline and line-trough</span>
<span style="color: rgb(0, 128, 64);">color</span>
<span style="background-color: rgb(255, 0, 0); color: rgb(255, 255, 255);">background color</span>
<span style="font-weight: bold;">bold</span>
<span style="font-size: xx-small;">xx-small</span>
<span style="font-size: x-small;">x-small</span>
<span style="font-size: small;">small</span>
<span style="font-size: medium;">medium</span>
<span style="font-size: large;">large</span>
<span style="font-size: x-large;">x-large</span>
<span style="font-size: xx-large;">xx-large</span>
</p>';

//$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table

// add a page
//$pdf->AddPage();

// create some HTML content
$subtable = '<table border="5" cellspacing="0" cellpadding="0"><tr><td>a</td><td>b</td></tr><tr><td>c</td><td>d</td></tr></table>';

$html = '<h2>HTML TABLE:</h2>
<table border="1" cellspacing="3" cellpadding="4">
    <tr>
        <th>#</th>
        <th align="right">RIGHT align</th>
        <th align="left">LEFT align</th>
        <th>4A</th>
    </tr>
    <tr>
        <td>1</td>
        <td bgcolor="#cccccc" align="center" colspan="2">A1 ex<i>amp</i>le <a href="http://www.tcpdf.org">link</a> column span. One two tree four five six seven eight nine ten.<br />line after br<br /><small>small text</small> normal <sub>subscript</sub> normal <sup>superscript</sup> normal  bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla<ol><li>first<ol><li>sublist</li><li>sublist</li></ol></li><li>second</li></ol><small color="#FF0000" bgcolor="#FFFF00">small small small small small small small small small small small small small small small small small small small small</small></td>
        <td>4B</td>
    </tr>
    <tr>
        <td>'.$subtable.'</td>
        <td bgcolor="#0000FF" color="yellow" align="center">A2 € &euro; &#8364; &amp; è &egrave;<br/>A2 € &euro; &#8364; &amp; è &egrave;</td>
        <td bgcolor="#FFFF00" align="left"><font color="#FF0000">Red</font> Yellow BG</td>
        <td>4C</td>
    </tr>
    <tr>
        <td>1A</td>
        <td rowspan="2" colspan="2" bgcolor="#FFFFCC">2AA<br />2AB<br />2AC</td>
        <td bgcolor="#FF0000">4D</td>
    </tr>
    <tr>
        <td>1B</td>
        <td>4E</td>
    </tr>
    <tr>
        <td>1C</td>
        <td>2C</td>
        <td>3C</td>
        <td>4F</td>
    </tr>
</table>';

// output the HTML content
//$pdf->writeHTML($html, true, false, true, false, '');

// Print some HTML Cells

$html = '<span color="red">red</span> <span color="green">green</span> <span color="blue">blue</span><br /><span color="red">red</span> <span color="green">green</span> <span color="blue">blue</span>';

$pdf->SetFillColor(255,255,0);

/*$pdf->writeHTMLCell(0, 0, '', '', $html, 'LRTB', 1, 0, true, 'L', true);
$pdf->writeHTMLCell(0, 0, '', '', $html, 'LRTB', 1, 1, true, 'C', true);
$pdf->writeHTMLCell(0, 0, '', '', $html, 'LRTB', 1, 0, true, 'R', true); */

// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table

// add a page
//$pdf->AddPage();

// create some HTML content
$html = '
<table class="tg" style="border-collapse: collapse;border-spacing: 0;">
<thead>
  <tr>
    <td class="tg-0lax" style="border-color: black;border-style: solid;border-width: 1px;font-family: Arial, sans-serif;font-size: 14px;overflow: hidden;padding: 10px 5px;word-break: normal;text-align: left;vertical-align: top;">asdfasdfasdf</td>
    <td class="tg-0lax" style="border-color: black;border-style: solid;border-width: 1px;font-family: Arial, sans-serif;font-size: 14px;overflow: hidden;padding: 10px 5px;word-break: normal;text-align: left;vertical-align: top;">adsfsadfasdf</td>
    <td class="tg-0lax" style="border-color: black;border-style: solid;border-width: 1px;font-family: Arial, sans-serif;font-size: 14px;overflow: hidden;padding: 10px 5px;word-break: normal;text-align: left;vertical-align: top;">adsfasdfsadf</td>
  </tr>
</thead>
</table>';

// output the HTML content
//$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print all HTML colors

// add a page


$textcolors = '<h1>HTML Text Colors</h1>';
$bgcolors = '<hr /><h1>HTML Background Colors</h1>';



// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// Test word-wrap

// create some HTML content


// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// test custom bullet points for list

// add a page




// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output(__DIR__.'/verynice.pdf', 'F');
//$pdf->Output('example_006.pdf', 'I');

/*$client = new HelloSign\Client('2db138074a1580285659e1f4b87ca25944f66b5c8c6723d7719f14b0a585ecd3');
$request = new HelloSign\SignatureRequest;
$request->enableTestMode();
$request->setTitle('NDA with Acme Co.');
$request->setSubject('The NDA we talked about');
$request->setMessage('Please sign this NDA and then we can discuss more. Let me know if you have any questions.');
$request->addSigner('enquiries@headstudios.com.au', 'Bobley');
$request->addFile('verynice.pdf');
$response = $client->sendSignatureRequest($request); */

$zoho = new ZohoInvoice($env);
$contact_id = $zoho->getContactIDByEmail('enquiries@headstudios.com.au');
$form_id = $json_loader['id'];
$form_exists = $zoho->formExists($form_id);
$filtered = $zoho->lineItemParser($json_loader['products']);
$id = $zoho->getContactIDByEmail('enquiries@headstudios.com.au');
MyFun::console_log('Here are the products passed to the lineItemParser');
MyFun::console_log($filtered);
$inv_id = $zoho->createInvoiceDraft($filtered, $id);
$inv_file = 'images/inv-'.$inv_id.'.pdf';
$zoho->getAndSaveInv($inv_id, $inv_file);

/* 
DEVELOPERS! Job #1 - Setup Gmail Draft
Problem: At the moment my code is creating and sending an email with a contract, invoice, guarantees and all sorts of things automatically
when I fill out a form which sends data to this end point. This is great but... I want to be able to review the email before it is sent -
just in case I want to touch up some text - make sure everything is setup correctly etc. At the moment I am using SwiftMailer PHP library 
to connect to my Google Workspace Gmail account which is great - however I can't find a guide or a solution to create a Gmail draft
with this library. 

Solution: Using - what has been recommended to me - the Gmail API - you will need to change the code below to basically do everything 
it is doing now (attach files, set some HTML in the body)... but have it be saved as a 'Draft' which I can then review before sending. 
That's it! Same functionality - just as a Draft message.

Let me know if you would like me to give you an app password for my Gmail if you would like to test with me live (or use your own Gmail for testing)
Let me know if you would like to do a standalone 'proof of concept' script or if you would like to update the script below for my review

Deliverables:
- Emails can be created as drafts in my Gmail with rich text
- Draft emails have attachments
- That's it

Time Estimate: 30 minutes


*/

$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
  ->setUsername('kosta@headstudios.com.au')
  ->setPassword($env['smtp_pass']);
$mailer = new Swift_Mailer($transport);

$message = (new Swift_Message())
 ->setSubject('Here should be a subject')
->setFrom(['kosta@headstudios.com.au'])
 ->setTo(['kostakondratenko@gmail.com' => 'My Alter Ego'])
->setCc([
'enquiries@headstudios.com.au' => 'My Inner Alter'
]);
$message->setContentType('text/html');
if($form_exists) {
  $message->setBody(
    '<p>Hey John,</p>Just making some updates to the agreement.</b>'); } else {
$message->setBody(
'<p>Hello John,</p>This is a brand new agreement. <b>Your contract is here.</b>'); }
//$message->addPart('This is some <b>plain</b> text', 'text/plain');
$message->attach(Swift_Attachment::fromPath('verynice.pdf'));
$message->attach(Swift_Attachment::fromPath('how-to-accept.pdf'));
$message->attach(Swift_Attachment::fromPath('guarantee.pdf'));
$message->attach(Swift_Attachment::fromPath($inv_file));
$mailer->send($message);

//============================================================+
// END OF FILE
//============================================================+