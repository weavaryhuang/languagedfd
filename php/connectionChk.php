<?php

$servername = "database-1.cldzhnkoxt2b.eu-west-2.rds.amazonaws.com";
$username = "root";
$password = "gnBn2&6Vc#ai67";
$dbname = "mydb";
$dbport = "3306";


try {
$conn = new PDO("mysql:host=$servername; port=$port; dbname=$dbname;", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully <br>";
} catch(PDOException $e) {
echo "Connection failed: <br>" . $e->getMessage();
}

?>