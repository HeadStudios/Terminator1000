<?php

require "../vendor/autoload.php"; 
require "../env.php";
require "../error.php";

$json = '[{"action":"smssender"},{"ID":"recpuIDwtkOxhYyLO","Name":"Kosta  Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/kostas-terminator","LinkID":"lnk_1LHi_2mHMTF","Mobile":["0412 826 569"]},{"ID":"rec2nv7qKlwU5jmbV","Name":"Kostya Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/kostyas-terminator","LinkID":"lnk_1LHi_2mHMTG","Mobile":["+61412 826 569"]},{"ID":"recHeks3mMpdTZnvE","Name":"Konstantin Kondratenko","URL":"https://headstudios.com.au/for_you/sales-terminator-army-generator/","Shortlink":"https://showme.headstudios.com.au/konstantins-terminator","LinkID":"lnk_1LHi_2mHMTH","Mobile":["4128 265 69"]}]';

    
DB::$user = 'root';
DB::$password = 'root';

// ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';
// App Builder Password: password77
// com.terminator1000.thepath
// Firebase 
// Server Key: 	AAAADkKDrDU:APA91bGvrrJwHz9Fj7I_xg_ivqcJOO8Kb_VeZsaXMJONv9X3iGfySjEoiR1fyD7RNAsheDvzfOFYjB5W99a4cky1xBFX2kv7S58KaBjyJMHSIJgFZfX4SpFvbJ2qUSenjKhFId1jwP4P
// Sender ID: 61245467701

$results = DB::query("SELECT * FROM tasks");
var_dump($results);
foreach ($results as $row) {
  var_dump($row);
}

//DB::query("CREATE TABLE msg_sent (fname varchar)");


echo "We are ready";

echo "Yo. What's up";