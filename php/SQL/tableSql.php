<?php

include_once "phprd.php";
$permissionUser = $data_r;

if($permissionUser == "HEN")
    $permissionUser = "demotb";

echo "<br>";
echo "<table class='center' style='border: solid 1px black;background: white; margin-left:auto;margin-right:auto;'>";
// echo "<tr><th style='background: white;border: solid 1px black;'>UserId</th><th style='background: white;border: solid 1px black;'>UserBasicInfo</th>
// <th style='background: white;border: solid 1px black;'>UserStatus</th><th style='background: white;border: solid 1px black;'>UserTime</th>
// <th style='background: white;border: solid 1px black;'>UserContent</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($content) {
        parent::__construct($content, self::LEAVES_ONLY);
    }
    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }
    function beginChildren():void {
        echo "<tr>";
    }
    function endChildren():void {
        echo "</tr>" . "\n";
    }
}

// if($permissionUser == "HEN")
//     $sql = "select * from mydb.demotb;";
// else 
//     $sql  = "select * from mydb.test;";
 
try
{
    include "connectionSQL.php";
    // echo $permissionUser;
    // echo $sql;
    $sql = "select userstatus, usertime, usercontent from mydb.$permissionUser;";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $result = $stmt->fetchAll();
    // print_r($result);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
            echo $v;
    }
}

catch (PDOException $e)
{
    echo $sql;
}

$conn = null;
echo "</table>";


?>