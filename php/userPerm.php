<?php
 
include "connectionSQL.php";


try
{
    // $usertb = $tbname;
    $sql  = "select * from mydb.$ttUser;";
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

//$permissionUser = $result[0]['UserBasicInfo'];

//echo $permissionId;

?>