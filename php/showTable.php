<?php

$fname_r = "text";
$count_log_r = 3;
$path_r = "../log/$fname_r$count_log_r.txt";

$file_r = basename($path_r);

$readfile = fopen($path_r, "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($readfile)) {
    echo fgetc($readfile);
}
fclose($readfile);

echo "<br>";
echo "<table class='center' style='border: solid 1px black;background: #ddd; margin-left:auto;margin-right:auto;'>";
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


try
{
    include "connectionSQL.php";
    // $usertb = $tbname;
    if($permissionUser == "HEN")
        $sql = "select*from mydb.demotb;";
    else 
        $sql  = "select * from mydb.test;";
    echo $permissionUser;
    echo $sql;
    

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //$result = $stmt->fetchAll();

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