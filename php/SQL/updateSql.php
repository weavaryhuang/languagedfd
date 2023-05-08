<?php

include "connectionSQL.php";

$array_upd = [];

$userid = $_POST["userid"];
$uname = $_POST["uname"];
$content = $_POST["content"];

try
{

if ($permissionUser == "demotb") {
    $array_upd = [$uname, $content, $userid];
    $sql  = "Update mydb.$permissionUser SET UserBasicInfo = ?, UserContent = ? where userId = ?;";
}
else {
    $array_upd = [$content, $userid];
    $sql  = "Update mydb.$permissionUser SET UserContent = ? where userId = ?;";
}
    // $timeU = date('y/m/d H:m:s');
    // $sql  = "Update mydb.$permissionUser SET UserBasicInfo = ?, UserContent = ? where userId = ?;";
    // $stmt = $conn->query($sql);
    // $result = $stmt->fetchAll();

    $stmt = $conn->prepare($sql);
    $stmt->execute(
        $array_upd
    );

}

catch (PDOException $e)
{
    echo "ERROR: Could not able to execute";
}

?>