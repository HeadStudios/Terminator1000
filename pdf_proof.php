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

$array_input = array(

    'client_name' => 'Andrew Coronis',
    'client_company' => 'Coronis Real Estate'

);

$product_array = [['name' => 'Product Name 1', 'feature' => 'Product Feature 1', 'benefit' => 'Product Benefit 1'],
                    ['name' => 'Product Name 2', 'feature' => 'Product Feature 2', 'benefit' => 'Product Benefit 2'],
                    ['name' => 'Product Name 3', 'feature' => 'Product Feature 3', 'benefit' => 'Product Benefit 3']];





$beveller = new In_n_Out($array_input);
//$beveller->talk_your_shit();

class In_n_Out {

    protected $its_all_mine = array();
   
    function __construct($the_cut) {

        if(isset($the_cut['client_name'])) {

            //echo "I see you Mr. Sharpe!";

            $this->its_all_mine = $the_cut;

        }
    
    }

    function talk_your_shit() {

        var_dump($this->its_all_mine);

    }

    function table_spit($table_array) {

       //$table = '<table>';
       $table = '';
       foreach($table_array as $keybit) {

            $table .= '<tr>';
            $table .= '<td>'.$keybit['name'].'</td>';
            $table .= '<td>'.$keybit['feature'].'</td>';
            $table .= '<td>'.$keybit['benefit'].'</td>';
            $table .= '</tr>';

        }
        //$table .= '</table>';
        return $table;

    }


function in_n_out($html) {

    

    $my_html = $html;

    if(isset($this->its_all_mine['client_name'])) {

        // Provides: <body text='black'>
        $my_html = str_replace("{{client_name}}", $this->its_all_mine['client_name'] , $my_html);

    }

    return $my_html;



}



}

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

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
    border: 1px solid black;
  }</style>
<h1>1. Understanding the Challenge</h1>
<p><span style="color: #424242;">[Company Name] wishes to accelerate its growth and increase the volume of outbound activity - however at the moment it doesn&rsquo;t know what those metrics are. Also - balancing outbound activity with operational activity is challenging as it&rsquo;s not easy to see how much availability staff has for the week.&nbsp;</span></p>
<p><span style="color: #424242;">Also staff motivation is a challenge since it&rsquo;s difficult to get a read of current open work orders to load balance outreach efforts with property management efforts.&nbsp;</span></p>
<h1>2. Proposed Solution</h1>
<p><span style="color: #424242;">In order to understand [Company Name]&rsquo;s current situation the following 1st principle metrics will be made available in the following categories:</span></p>
<div>
<table style="border:3px black;">
<tbody>
<tr>
<td><span style="color: #ffffff;"><strong>Product</strong></span></td>
<td><span style="color: #ffffff;"><strong>Description</strong></span></td>
<td><span style="color: #ffffff;"><strong>Benefit</strong></span></td>
</tr>
'.$beveller->table_spit($product_array).'
<tr>
<td>Brand Branch</td>
<td>Take a copy of your website and rebrand on new domain (e.g. yourname<strong>managements</strong>.com.au)&nbsp;</td>
<td>Quick turnaround and begin receiving leads as quickly as possible without needing to involve IT and lengthen project, also reduce risk of any critical online business data like listings being compromisedProtect main company account from falling into Spam, ruining your online reputation and being unable to follow up with clients&nbsp;</td>
</tr>
<tr>
<td>Personalised AI 24/7 Sales Videos x 2</td>
<td>Sales bot, customised video with captions - capture attention, educate client and position your company as a knowledge expertBased on my research into investor psychology (from speaking to them) as well as learning how to stay &ldquo;top of mind&rdquo; - this bot will blow away your future clients and will be a great talking point to set yourself up to close the deal with them when it&rsquo;s time.Note: script approval will be sent for approval</td>
<td>Great talking point, increase time on site (video statistic) which increases chance of becoming a customer (average time someone spends researching a company), positions you as a forward thinking property management company to allow you to charge a premium for your services and avoid giving up your &ldquo;management fee&rdquo; to close a client&nbsp;</td>
</tr>
<tr>
<td>Email Campaign</td>
<td>Send out email campaign from private server - with custom copy to engage the customer from your personalised domain</td>
<td>Email warm up for maximum deliverability (open rates of 40%), staggered send out to control lead flow to your company&rsquo;s unique requirements and grow at the pace you wish - avoid staff overwork and maintain staff retention</td>
</tr>
<tr>
<td>Video Blog Landing Page</td>
<td>Call to action, personalised</td>
<td>Call to action increases conversion by x%Pull and display reviews under the video blog from Google - increase conversions by social proof</td>
</tr>
</tbody>
</table>
</div>
<h1>3. Stakeholders</h1>
<p><span style="color: #424242;">Below will be the direct contact details of the Stakeholders involved in the Dashboard deliverable as well as their roles (minor and more major)</span></p>
<div>
<table>
<tbody>
<tr>
<td><span style="color: #ffffff;"><strong>Stakeholder Name</strong></span></td>
<td><span style="color: #ffffff;"><strong>Position</strong></span></td>
<td><span style="color: #ffffff;"><strong>Best Contact Details</strong></span></td>
<td><span style="color: #ffffff;"><strong>Responsibility</strong></span></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0415932797j.smith@gmail.com</td>
<td>Send data list, make follow up calls, social media manager, website manager, IT person,&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Kosta Kondratenko</td>
<td>Real Estate Accelerator/Rent Roll Growth System Guy</td>
<td>Mobile: 0412 826 569Email: <a href="mailto:kosta@headstudios.com.au" target="_blank" rel="noopener">kosta@headstudios.com.au</a>Skype: kostathehead</td>
<td>Setting up the Dashboard, obtaining and following up with stakeholders above for required information to make this happens and interfacing and getting feedback&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
</div>
<h1>8. Proposed Schedule</h1>
<div>
<table>
<tbody>
<tr>
<td><span style="color: #ffffff;"><strong>Project Activity</strong></span></td>
<td>&nbsp;</td>
<td><span style="color: #ffffff;"><strong>Date of Completion</strong></span></td>
</tr>
<tr>
<td><strong>Receive data</strong><strong>Create sub brand</strong><strong>Warm up email list&nbsp;</strong><strong>Approve script</strong></td>
<td>&nbsp;</td>
<td>2 weeks0</td>
</tr>
<tr>
<td><strong>Email Campaign</strong><strong>2 emails sent - leads delivered with hand off + follow up</strong></td>
<td>&nbsp;</td>
<td>6 weeks</td>
</tr>
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
$pdf->Output('example_006.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+