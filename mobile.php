<?php
//$mob_number = "0488 499 001";
$mob_number = "+61408 998 998";
//$mob_number = "61408 998 998";
//$mob_number = "0061408 998 998";
//$mob_number = "415 093213";


$mob_number = str_replace(" ","",$mob_number);



if(strlen($mob_number)<10 && substr($mob_number, 0, 1) != '0'){
    $mob_number = '61'.$mob_number;
    }if(strlen($mob_number)<11 && substr($mob_number, 0, 1) == '0'){
    $mob_number = preg_replace('/^0/','61',$mob_number);
    }elseif(strlen($mob_number)>11 && substr($mob_number, 0, 3) == '+61'){
    $mob_number = str_replace('+61','61',$mob_number);
    }elseif(strlen($mob_number)>12 && substr($mob_number, 0, 4) == '0061'){
    $mob_number = str_replace('0061','61',$mob_number);
    }
echo $mob_number;