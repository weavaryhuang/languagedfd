<?php

include "connectionSQL.php";

$uname = $_POST["uname"];
$status = $_POST["status"];
$time = $_POST["time"];
$content = $_POST["content"];

try
{
$sql  = "INSERT INTO mydb.demotb (UserBasicInfo, UserStatus, UserTime, UserContent)
                VALUES (?, ?, ?, ?);";
$stmt = $conn->prepare($sql);
$stmt->execute(array(
    $uname,
    $status,
    $time,
    $content
));
}
catch (PDOException $e)
{
    echo "ERROR: Could not able to execute";
}

?>