<?php

$servername = "localhost";
$username = "root";
$password = "AsdfgHjkl098";
$dbname = "mydb";


try {
$conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully <br>";
} catch(PDOException $e) {
echo "Connection failed: <br>" . $e->getMessage();
}

?>