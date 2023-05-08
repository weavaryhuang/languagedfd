<?php

include "connectionSQL.php";
 
try
{
    $sql = "select * from mydb.demotb;";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
}

catch (PDOException $e)
{
    echo $e;
}

$conn = null;
?>