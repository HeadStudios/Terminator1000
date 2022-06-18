<?php
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

$json_loader = '{"Form":{"Id":"1","InternalName":"BasicContactForm","Name":"Basic Contact Form"},"$version":7,"$etag":"W/\"datetime\'2022-06-18T06%3A20%3A22.0064827Z\'\"","Clientcompany":"Adronis Corporation","CommentsOrQuestions":null,"Clientname":"Michael Bashford","WebsiteURL":null,"Products":[{"Id":"65hao","ProductName":"Product 1 Name","ProductFeature":"Product 1 Feature","ProductBenefit":"Product 1 Benefit","Items":"Product 1","Personal":"1","ItemNumber":1},{"Id":"oWe8F","ProductName":"Product 2 Name","ProductFeature":"Product 2 Feature","ProductBenefit":"Product 2 Benefit","Items":"Product 2","Personal":"1","ItemNumber":2},{"Id":"31Im5A","ProductName":"Product 3 Name","ProductFeature":"Product 3 Feature","ProductBenefit":"Product 3 Benefit","Items":"Product 3","Personal":"1","ItemNumber":3}],"Emailbody":"Hi Michael,\n\nThank you - the question is. Is this one line or two? \n\nThis is your email body - it\'s been formatting with new line characters I presume.\n\nThank you,\nKosta","Execsummary":"At Broadbeach you are having a project which is not working well. There are many problems. This executive \nsummary is multi line so you know you\'re dealing with the best. \n\nAt Broadbeach you are having a project which is not working well. There are many problems. This executive summary is multi line so you know you\'re dealing with the best. \n\nAt Broadbeach you are having a project which is not working well. There are many problems. This executive summary is multi line so you know you\'re dealing with the best. \n\nAt Broadbeach you are having a project which is not working well. There are many problems. This executive summary is multi line so you know you\'re dealing with the best.","Clientaddress":"123 Adronis Corp. Bigwig Ashadonia","Date":"2022-06-15","Stakeholders":[{"Id":"Zig6c","Name":"Michael Walden","Position":"Nobody","Contact":"041593234,j.smith@gmail.com","Responsibility":"Being a shit head","ItemNumber":1},{"Id":"o7m9P","Name":"Vedran","Position":"Cool Guy","Contact":"03344234,vedran@headstudios.com.au","Responsibility":"Cool guy","ItemNumber":2}],"Schedule":[{"Id":"28REnS","Activity":"Setup emails","Description":"Vroom vroom go the outreach","Date2":"2022-06-21","ItemNumber":1},{"Id":"2rfJ9D","Activity":"Setup CRO","Description":"Conversion go vroom","Date2":"2022-07-08","ItemNumber":2}],"Entry":{"AdminLink":"https://www.cognitoforms.com/HeadStudios1/1/entries/6","DateCreated":"2022-06-15T11:37:03.555Z","DateSubmitted":"2022-06-15T11:37:03.508Z","DateUpdated":"2022-06-18T06:20:21.806Z","EditLink":"https://www.cognitoforms.com/HeadStudios1/BasicContactForm#rQoyx7az1zzyLK_5-1sqw46gtMUtLbhhcc4EhmjhN_g$*","IsBeta":true,"LastPageViewed":null,"Number":6,"Order":null,"Origin":{"City":null,"CountryCode":null,"IpAddress":"202.0.188.100","IsImported":false,"Region":null,"Timezone":null,"UserAgent":"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36"},"Timestamp":"2022-06-15T11:37:03.508Z","Version":4,"ViewLink":"https://www.cognitoforms.com/HeadStudios1/BasicContactForm#kojo4pkwAj9pUBZmpQevqLOCl_zfo6OEv8kRtnEjg5M$*","Status":"Submitted","Document1":"https://www.cognitoforms.com/d/T-ePMCsVsEGSeY9MIsr5kA?code=WCxAW6QrblJclF7GLtaH9iLU5qRz0tuDo_R7N7POKk0$","Document2":"https://www.cognitoforms.com/d/T-ePMCsVsEGSeY9MIsr5kA?code=cgHLNuxsviXiQYeNuIsZmR5A8b8g-J0LPnJPX4-EnmI$"},"Id":"1-6"}';
$json_loader = json_decode($json_loader, true);
$json_loader = array_change_key_case($json_loader,CASE_LOWER);
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

    function talk_your_shit() {

        var_dump($this->its_all_mine);

    }

    function table_spit($table_array,$num=1) {

       //$table = '<table>';
       if($num==1) {
       $table = '';
       foreach($table_array as $keybit) {

            $table .= '<tr>';
            $table .= '<td>'.$keybit['ProductName'].'</td>';
            $table .= '<td>'.$keybit['ProductFeature'].'</td>';
            $table .= '<td>'.$keybit['ProductBenefit'].'</td>';
            $table .= '</tr>';

        }
        //$table .= '</table>';
        return $table;
        }
        if($num==2) {
        $table = '';
        foreach($table_array as $keybit) {

            $table .= '<tr>';
            $table .= '<td>'.$keybit['Name'].'</td>';
            $table .= '<td>'.$keybit['Position'].'</td>';
            $table .= '<td>'.$keybit['Contact'].'</td>';
            $table .= '<td>'.$keybit['Responsibility'].'</td>';
            $table .= '</tr>';

        }
        //$table .= '</table>';
        return $table;
        }
        if($num==3) {
            $table = '';
            foreach($table_array as $keybit) {
    
                $table .= '<tr>';
                $table .= '<td>'.$keybit['Activity'].'</td>';
                $table .= '<td>'.$keybit['Description'].'</td>';
                $table .= '<td>'.$keybit['Date2'].'</td>';
                $table .= '</tr>';
    
            }
            //$table .= '</table>';
            return $table;
        }

        
    }


function in_n_out($html) {

    

    $my_html = $html;

    //if(isset($this->its_all_mine['clientname'])) {

        // Provides: <body text='black'>
        // Use this as a key code for naming of form fields in Incognito or anyone that submits
        $my_html = str_replace("{{client_name}}", $this->its_all_mine['clientname'] , $my_html);
        //echo "Client name is....".$this->its_all_mine['clientname'];
        //$my_html = str_replace("{{client_company}}", $this->its_all_mine['clientcompany'] , $my_html);
        //$my_html = str_replace("{{date}}", $this->its_all_mine['date'] , $my_html);
        //$my_html = str_replace("{{client_address}}", $this->its_all_mine['clientaddress'] , $my_html);
        $my_html = str_replace("{{email_body}}", nl2br($this->its_all_mine['emailbody']) , $my_html);
        $my_html = str_replace("{{executive_summary}}", $this->its_all_mine['execsummary'] , $my_html);

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
<h3>Privacy</h3>
<p><span style="color: #424242;">Any and all contact data provided by the company by [Company Name] should remain its property and will be treated with utmost confidence. All ownership of customer data will remain with [Company Name].</span></p>
<h3>Privacy</h3>
<p><span style="color: #424242;">Any and all contact data provided by the company by [Company Name] should remain its property and will be treated with utmost confidence. All ownership of customer data will remain with [Company Name].&nbsp;</span></p>
<h3>Video Length</h3>
<p><span style="color: #424242;">Video content is charged by video length. This agreement assumed a total length of up to 30 seconds per video for 5 videos.&nbsp;</span></p>
<h3>Termination</h3>
<p><span style="color: #424242;">This Agreement may be terminated by either Party at any time for any cause deemed reasonable, provided that the terminating Party issues a termination notice to the other Party by email. Any landing pages and domains created as part of this agreement then become property of Head Studios.</span></p>
<h3>Satisfaction Guarantee&nbsp;</h3>
<p><span style="color: #424242;">As this is the first project - if at any point you feel your expectations are not met simply email through and request a refund and it will be granted - I&rsquo;ll even let you keep the sub brand.</span></p>';
$pdf->writeHTML($beveller->in_n_out($html), true, false, true, false, '');
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
$pdf->Output('example_006.pdf', 'I');


//============================================================+
// END OF FILE
//============================================================+