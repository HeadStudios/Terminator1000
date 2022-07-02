<?php
require "vendor/autoload.php";
require "env.php";
require "error.php";
require "inc/zohoinvoice.php";
error_reporting(error_reporting() & ~E_DEPRECATED);

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
//$json_loader = '{"Form":{"Id":"1","InternalName":"BasicContactForm","Name":"Basic Contact Form"},"$version":7,"$etag":"W/\"datetime\'2022-06-21T09%3A57%3A10.6132917Z\'\"","Clientcompany":"Brombie Place","CommentsOrQuestions":"WHat do you think?","Clientname":"Brian Gumble","WebsiteURL":"https://yourclientco.com.au","Products":[{"Id":"GVyrm","ProductName":"Product 1 Name","ProductFeature":"Product 1 Feature","ProductBenefit":"Product 1 Benefit","Items":"Product 1","ItemNumber":1},{"Id":"4v4amR","ProductName":"Product 2 Name","ProductFeature":"Product 2 Feature","ProductBenefit":"Product 2 Benefit","Items":"Product 2","ItemNumber":2}],"Emailbody":"Hi John,\n\nReady to get started *are you ready sir?*\n\nBecause the _party has just begun_ .\n\nGood luck!","Execsummary":"At John Michaels bad things are happening - and we are fixing those bad things!","Clientaddress":"132 Ashford Lane, Ashworth QLD 2000","Date":"2022-06-21","Stakeholders":[{"Id":"6ISd2","Name":"Michael","Position":"CEO","Contact":"Michael Brombery","Responsibility":"Look after everything","ItemNumber":1}],"Schedule":[{"Id":"1yYLtu","Activity":"Get it done","Description":"Get the whole thing done","Date2":"2022-06-21","ItemNumber":1}],"Terms":[{"Id":"GBtS0","Headline":"Video Length","Description":"Video content is charged by video length. This agreement assumed a total length of up to 30 seconds per video for 5 videos.","Terms":"Video Length","ItemNumber":1},{"Id":"3CaZ5D","Headline":"Satisfaction Guarantee","Description":"As this is the first project - if at any point you feel your expectations are not met simply email through and request a refund and it will be granted - I’ll even let you keep the sub brand.","Terms":"Satisfaction Guarantee","ItemNumber":2},{"Id":"2rvFN8","Headline":"Termination","Description":"This Agreement may be terminated by either Party at any time for any cause deemed reasonable,\nprovided that the terminating Party issues a termination notice to the other Party by email. Any\nlanding pages and domains created as part of this agreement then become property of Head\nStudios.","Terms":"Termination","ItemNumber":3}],"Entry":{"AdminLink":"https://www.cognitoforms.com/HeadStudios1/1/entries/8","DateCreated":"2022-06-21T09:50:47.843Z","DateSubmitted":"2022-06-21T09:50:47.796Z","DateUpdated":"2022-06-21T09:57:10.38Z","EditLink":"https://www.cognitoforms.com/HeadStudios1/BasicContactForm#VaTmgvSFTKhmt0ZnjpXnHv2-7YxG0fE7W4d-l3Rg1HI$*","IsBeta":true,"LastPageViewed":null,"Number":8,"Order":null,"Origin":{"City":null,"CountryCode":null,"IpAddress":"202.0.188.100","IsImported":false,"Region":null,"Timezone":null,"UserAgent":"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36"},"Timestamp":"2022-06-21T09:50:47.796Z","Version":2,"ViewLink":"https://www.cognitoforms.com/HeadStudios1/BasicContactForm#ww_b3bF2m-Zz7a78Jib2clcgkjzdJaNZV6MffK5fkUE$*","Status":"Submitted","Document1":"https://www.cognitoforms.com/d/T-ePMCsVsEGSeY9MIsr5kA?code=rAMNd0qOssIFsORUPVcdP4UsKDwJGyuI0nO5CZ_DrQ0$","Document2":"https://www.cognitoforms.com/d/T-ePMCsVsEGSeY9MIsr5kA?code=wAwdbhFarOZCZQUDPBbK4GestDhaLuO-bDKxyWRKYiE$"},"Id":"1-8"}';
$formidable_loader = '[{"id":"22","item_key":"s9br8","name":["Brian Gumble","Jessica Almond"],"description":["Get all the info","Get the ball moving","Kick the ball out of the park"],"ip":"202.0.188.100","form_id":"3","post_id":"0","user_id":"1","parent_item_id":"0","is_draft":"0","updated_by":"1","created_at":"2022-07-02 05:25:35","updated_at":"2022-07-02 05:25:35","clientname":"Michael Berner","dgh33":"m.berner@gmail.com","clientcompany":"Berner Company & Co","websiteurl":"https:\/\/bernercandles.com.au","date":"July 13, 2022","date-value":"2022-07-13","clientaddress":"34 Berner Avenue, Bromengham 2012 QLD","emailbody":"Hey Joh,\r\n\r\nAre you ready for the real? \r\n\r\nThen let\'s do it!","execsummary":"It seems that we are in a strange position - the issue is:\r\n\r\n*Issue here*\r\nAnd we will fix it!","products":{"form":"4","i11":{"productname":"Product Name #1","productfeature":"Product Feature #1 - Description here and here.","productbenefit":"Product Benefit #1 - Description here and here. "},"i12":{"productname":"Product Name #2","productfeature":"Product Feature #2 - Description here and here.","productbenefit":"Product Benefit #2 - Description here and here."},"i13":{"productname":"Product Name #3","productfeature":"Product Feature #3 - Description here and here. ","productbenefit":"Product Benefit #3 - Description here and here. "}},"productname":["Product Name #1","Product Name #2","Product Name #3"],"productfeature":["Product Feature #1 - Description here and here. ","Product Feature #2 - Description here and here. Description here and here. Description here and here. Description here and here. Description here and here. Description here and here.","Product Feature #3 - Description here and here. Description here and here. Description here and here. Description here and here. Description here and here. Description here and here."],"productbenefit":["Product Benefit #1 - Description here and here. Description here and here. Description here and here. Description here and here. Description here and here. Description here and here.","Product Benefit #2 - Description here and here. Description here and here. Description here and here. Description here and here. Description here and here. Description here and here.","Product Benefit #3 - Description here and here. Description here and here. Description here and here. Description here and here. Description here and here. Description here and here."],"stakeholders":{"form":"5","i14":{"name":"Brian Gumble","position":"Principal","contact":"0415932797 \/ j.smith@gmail.com","responsibility":"Make it real"},"i15":{"name":"Jessica Almond","position":"Property Manager","contact":"0432 451 332 \/ j.almond@headstudios.com.au","responsibility":"Oversee and make sure everything works well"}},"position":["Principal","Property Manager"],"contact":["0415932797 \/ j.smith@gmail.com","0432 451 332 \/ j.almond@headstudios.com.au"],"responsibility":["Make it real","Oversee and make sure everything works well"],"schedule":{"form":"7","i16":{"activity":"Start the Ball","description":"Get all the info","date2":"July 8, 2022","date2-value":"2022-07-08"},"i17":{"activity":"Roll the Ball","description":"Get the ball moving","date2":"July 14, 2022","date2-value":"2022-07-14"},"i18":{"activity":"Ball the Wall","description":"Kick the ball out of the park","date2":"July 22, 2022","date2-value":"2022-07-22"}},"activity":["Start the Ball","Roll the Ball","Ball the Wall"],"date2":["July 8, 2022","July 14, 2022","July 22, 2022"],"date2-value":["2022-07-08","2022-07-14","2022-07-22"],"terms":{"form":"6","i19":{"headline":"Headline #1","description2":"Make sure you play ball"},"i20":{"headline":"Headline #2","description2":"Make sure you dunk the ball in"},"i21":{"headline":"Headline #3","description2":"Make sure you don\'t stumble"}},"headline":["Headline #1","Headline #2","Headline #3"],"description2":["Make sure you play ball","Make sure you dunk the ball in","Make sure you don\'t stumble"],"6ecxf":"username","6ecxf-value":"1"}]';
//$json_loader = '{"Form":{"Id":"1","InternalName":"BasicContactForm","Name":"Basic Contact Form"},"$version":7,"$etag":"W/\"datetime\'2022-06-21T10%3A10%3A47.5734419Z\'\"","Clientcompany":"Brombie Place","CommentsOrQuestions":"WHat do you think?","Clientname":"John Michaels","WebsiteURL":"https://yourclientco.com.au","Products":[{"Id":"GVyrm","ProductName":null,"ProductFeature":null,"ProductBenefit":null,"Items":"Product 1","ItemNumber":1},{"Id":"4v4amR","ProductName":"Product 2 Name","ProductFeature":"Product 2 Feature","ProductBenefit":"Product 2 Benefit","Items":"Product 2","ItemNumber":2}],"Emailbody":"Hi John,\n\nReady to get started *are you ready sir?*\n\nBecause the _party has just begun_ .\n\nGood luck!","Execsummary":"At John Michaels bad things are happening - and we are fixing those bad things!","Clientaddress":"132 Ashford Lane, Ashworth QLD 2000","Date":"2022-06-21","Stakeholders":[{"Id":"6ISd2","Name":"Michael","Position":"CEO","Contact":"Michael Brombery","Responsibility":"Look after everything","ItemNumber":1}],"Schedule":[{"Id":"1yYLtu","Activity":"Get it done","Description":"Get the whole thing done","Date2":"2022-06-21","ItemNumber":1}],"Terms":[{"Id":"GBtS0","Headline":"Video Length","Description":"Video content is charged by video length. This agreement assumed a total length of up to 30 seconds per video for 5 videos.","Terms":"Video Length","ItemNumber":1},{"Id":"3CaZ5D","Headline":"Satisfaction Guarantee","Description":"As this is the first project - if at any point you feel your expectations are not met simply email through and request a refund and it will be granted - I’ll even let you keep the sub brand.","Terms":"Satisfaction Guarantee","ItemNumber":2},{"Id":"2rvFN8","Headline":"Termination","Description":"This Agreement may be terminated by either Party at any time for any cause deemed reasonable,\nprovided that the terminating Party issues a termination notice to the other Party by email. Any\nlanding pages and domains created as part of this agreement then become property of Head\nStudios.","Terms":"Termination","ItemNumber":3}],"Entry":{"AdminLink":"https://www.cognitoforms.com/HeadStudios1/1/entries/8","DateCreated":"2022-06-21T09:50:47.843Z","DateSubmitted":"2022-06-21T09:50:47.796Z","DateUpdated":"2022-06-21T10:10:47.349Z","EditLink":"https://www.cognitoforms.com/HeadStudios1/BasicContactForm#VaTmgvSFTKhmt0ZnjpXnHv2-7YxG0fE7W4d-l3Rg1HI$*","IsBeta":true,"LastPageViewed":null,"Number":8,"Order":null,"Origin":{"City":null,"CountryCode":null,"IpAddress":"202.0.188.100","IsImported":false,"Region":null,"Timezone":null,"UserAgent":"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36"},"Timestamp":"2022-06-21T09:50:47.796Z","Version":3,"ViewLink":"https://www.cognitoforms.com/HeadStudios1/BasicContactForm#ww_b3bF2m-Zz7a78Jib2clcgkjzdJaNZV6MffK5fkUE$*","Status":"Submitted","Document1":"https://www.cognitoforms.com/d/T-ePMCsVsEGSeY9MIsr5kA?code=siTZBVno24isiSbO1Il59n0aEs7v9xFK4V2LTCb1sLg$","Document2":"https://www.cognitoforms.com/d/T-ePMCsVsEGSeY9MIsr5kA?code=iyjaJ2pZCxIObZQpWQ89_4SJX3I9A7v-dlrNwdeoHvc$"},"Id":"1-8"}';
$json_loader = json_decode($formidable_loader, true);
//$json_loader = json_decode(file_get_contents('php://input'), true);
$json_loader = array_change_key_case($json_loader,CASE_LOWER);
$json_loader = $json_loader[0]; // remove this if not using Formidable Forms

$zoho = new ZohoInvoice($env);
$contact_id = $zoho->getContactIDByEmail('enquiries@headstudios.com.au');
$filtered = $zoho->lineItemParser($json_loader['products']);
$id = $zoho->getContactIDByEmail('enquiries@headstudios.com.au');
$zoho->createInvoiceDraft($filtered, $id);
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
$html = '<p><span style="color: #0b6374;"><strong>Video AI Rent Roll Acceleration System</strong></span></p>
<h3>PREPARED FOR</h3>
<p><span style="color: #424242;">{{client_name}}</span></p>
<p><span style="color: #424242;">{{client_company}}</span></p>
<h3>PREPARED BY</h3>
<p><span style="color: #424242;">Kosta Kondratenko</span></p>
<p style="text-align: right;"><span style="color: #424242;">{{date}}</span></p>
<h3 style="text-align: right;">{{client_name}}</h3>
<h3 style="text-align: right;">{{client_company}}</h3>
<p style="text-align: right;"><span style="color: #31394d;">{{client_address}}</span></p>
<p><span style="color: #424242;">Dear {{client_name}},</span></p>
<p><span style="color: #424242;">{{email_body}}</span></p>
<p><span style="color: #424242;">Yours Truly,</span><span style="color: #424242;">Kosta Kondratenko</span></p>
<p><span style="color: #0b6374;"><strong>EXECUTIVE SUMMARY</strong></span></p>
<p><span style="color: #424242;">{{executive_summary}}</span></p>
<div>
<table>
<tbody>
<tr>
<td>
<h3>Signed as accepted by client:</h3>
</td>
</tr>
<tr>
<td><span style="color: #232a3c;">{{client_name}}, Shot Caller&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
<td><span style="color: #232a3c;">[DATE]</span></td>
</tr>
</tbody>
</table>
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
$client = new HelloSign\Client('2db138074a1580285659e1f4b87ca25944f66b5c8c6723d7719f14b0a585ecd3');
$request = new HelloSign\SignatureRequest;
$request->enableTestMode();
$request->setTitle('NDA with Acme Co.');
$request->setSubject('The NDA we talked about');
$request->setMessage('Please sign this NDA and then we can discuss more. Let me know if you have any questions.');
$request->addSigner('enquiries@headstudios.com.au', 'Bobley');
$request->addFile('verynice.pdf');
$response = $client->sendSignatureRequest($request);

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
$message->setBody(
'<b>Your contract is here.</b>'
);
$message->addPart('This is some plain text', 'text/plain');
$message->attach(Swift_Attachment::fromPath('verynice.pdf'));
$mailer->send($message);

//============================================================+
// END OF FILE
//============================================================+