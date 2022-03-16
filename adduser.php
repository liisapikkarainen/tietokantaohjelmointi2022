<?php

require 'db.php';

if( !isset($_POST["fname"]) || !isset($_POST["lname"]) ) {
    echo "Parametreja puuttui! Ei voida lisätä henkilöä";
    exit;
}

$fname = $_POST["fname"];
$lname = $_POST["lname"];

if( empty($fname) || empty($lname) ){
    echo "Et voi asettaa tyhjiä arvoja!";
    exit;
}

try{
    $sql = "INSERT INTO person (firstname, lastname) VALUES ('$fname', '$lname')";
    $pdo->exec($sql);
    echo "Tervetuloa ".$fname." ".$lname.". Sinut on lisätty tietokantaan";
}catch(PDOException $e){
    echo "Käyttäjää ei voitu lisätä<br>";
    echo $e->getMessage();
}

