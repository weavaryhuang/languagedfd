
<html>
<body>

<?php

include "connectionSQL.php";

$uname = $_POST["uname"];
$status = $_POST["status"];
$time = $_POST["time"];
$content = $_POST["content"];



echo $uname;
echo "<br>";
echo $status;
echo "<br>";
echo $time;
echo "<br>";
echo $content;
echo "<br>";


// include "insertSql.php";
// include "openSql.php";

// echo $tableRows;
// echo "<br>";
// echo $tableCols;


?>

</body>
</html>