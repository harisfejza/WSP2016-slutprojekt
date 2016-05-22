require("details.php");
<?php

//Skapa uppkopplingen
$dbh=new PDO($dsn,$username,$Password);

//Kör SQL sats
$result=$dbh->query("SELECT * FROM uppgifter");

//Om det blir problem, skriv ut vad det var som blev fel
if(!$result) {print_r($dbh->errorInfo());}

$dbh=null;
