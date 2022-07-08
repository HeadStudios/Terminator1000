<?php

require "../vendor/autoload.php";

//$dbh = new PDO('mysql:host=terminator800-do-user-11771047-0.b.db.ondigitalocean.com:25060;dbname=defaultdb', 'doadmin', 'AVNS_V-SkkolpyadlmMzCdjc');
//$dbh = new PDO('mssql:host=www.myaddress.com:1234;dbname=test', 'user', 'pass');

DB::$host = 'terminator800-do-user-11771047-0.b.db.ondigitalocean.com:25060';
DB::$user = 'doadmin';
DB::$password = 'AVNS_V-SkkolpyadlmMzCdjc';
DB::$dbName = 'defaultdb'; 

/*DB::query("CREATE TABLE IF NOT EXISTS tasks (
    task_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    start_date DATE,
    due_date DATE,
    status TINYINT NOT NULL,
    priority TINYINT NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)  ENGINE=INNODB;"); */

DB::query("SELECT * FROM tasks");

//phpinfo();

