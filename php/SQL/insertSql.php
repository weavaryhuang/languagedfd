<?php

include "connectionSQL.php";

$array_ins = [];

$uname = $_POST["uname"];
$status = $_POST["status"];
$time = $_POST["time"];
$content = $_POST["content"];



try
{

if ($permissionUser == "demotb") {
    $array_ins = [$uname, $status, $time, $content];
    $sql  = "INSERT INTO mydb.$permissionUser (UserBasicInfo, UserStatus, UserTime, UserContent)
                VALUES (?, ?, ?, ?);";
}
else {
    $array_ins = [$status, $time, $content];
    $sql  = "INSERT INTO mydb.$permissionUser (UserStatus, UserTime, UserContent)
                VALUES (?, ?, ?);";
}

$stmt = $conn->prepare($sql);
$stmt->execute(
    $array_ins
);
}
catch (PDOException $e)
{
    echo "ERROR: Could not able to execute";
}

?>