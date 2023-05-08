<?php

include "connectionSQL.php";

$userid = $_POST["userid"];
$uname = $_POST["uname"];
$content = $_POST["content"];

try
{
    // $timeU = date('y/m/d H:m:s');
    $sql  = "Update mydb.demotb SET UserBasicInfo = ?, UserContent = ? where userId = ?;";
    // $stmt = $conn->query($sql);
    // $result = $stmt->fetchAll();

    $stmt = $conn->prepare($sql);
    $stmt->execute(array(
        $uname,
        $content,
        $userid
    ));

}

catch (PDOException $e)
{
    echo "ERROR: Could not able to execute";
}

include "openV.php";
?>