<?php

// require 'config.php';


$init = parse_ini_file("myconf.ini");
$host = $init["host"];
$dbname = $init["db"];
$uname = $init["username"];
$pw = $init["pw"]; 


$dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";
try {
	$pdo = new PDO($dsn, $uname, $pw);
    echo "Connected!";
} catch (PDOException $e) {
	echo $e->getMessage();
}