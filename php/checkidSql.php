<?php
include "connectionSQL.php";

$uname = $_POST["uname"];
$status = $_POST["status"];

try
{
    $sql  = "Select * from mydb.demotb where UserBasicInfo=? AND UserStatus=? ;";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$uname, $status]);
    $user = $stmt->fetchAll();
    $checkid = count($user);
}
catch (PDOException $e)
{
    echo "ERROR: Could not able to execute";
}

if($checkid > 0){
    $privilid = 1;
}
else
    $privilid = 0;

$checkid = 0;
$conn = null;

echo json_encode($privilid);
?>