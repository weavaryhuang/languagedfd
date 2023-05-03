<?php

echo "<br>";
echo "<table class='center' style='border: solid 1px black;background: #ddd; margin-left:auto;margin-right:auto;'>";
echo "<tr><th style='background: white;border: solid 1px black;'>UserId</th><th style='background: white;border: solid 1px black;'>UserBasicInfo</th>
<th style='background: white;border: solid 1px black;'>UserStatus</th><th style='background: white;border: solid 1px black;'>UserTime</th>
<th style='background: white;border: solid 1px black;'>UserContent</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }
    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }
    function beginChildren() {
        echo "<tr>";
    }
    function endChildren() {
        echo "</tr>" . "\n";
    }
}


try
{
    $usertb = "demotb";
    $sql  = "select * from mydb.$usertb;";
    // $stmt = $conn->query($sql);
    

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $result = $stmt->fetchAll();

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
            echo $v;
    }
}

catch (PDOException $e)
{
    echo "ERROR: Could not able to execute";
}

$conn = null;
echo "</table>";


?>