<?php
 
include_once "connectionSQL.php";


try
{
    include "connectionSQL.php";
    // $usertb = $tbname;
    $sql  = "select * from mydb.demotb;";
    // $stmt = $conn->query($sql);
    

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

}

catch (PDOException $e)
{
    echo $sql;
}
//print_r($result);

$permissionUser = $result[10]['UserBasicInfo'];

//echo $permissionId;

?>