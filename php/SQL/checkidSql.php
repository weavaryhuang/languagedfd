<?php
include "connectionSQL.php";

$uname = $_POST["uname"];
$status = $_POST["status"];

$fname_w= "text";
$count_log_w = 3;
$path_w = "../log/$fname_w$count_log_w.txt";
$file_w = basename($path_w);
$writefile = fopen($path_w, "w") or die("Unable to open file!");

fwrite($writefile, $_POST["uname"]);
fclose($writefile);

try
{
    $sql  = "Select * from demotb where UserBasicInfo=? and UserStatus=?;";
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

echo json_encode($privilid.$uname);
?>