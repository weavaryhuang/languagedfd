<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">

  
  
</head>
<body>
  
    <div class="topnav">      
      <a href="../Main.html">Main</a>
      <a href="../Data.html">Data</a>
      <a href="#" style="float:right">Link</a>
    </div>

    <div class="header">
      <h1>Dark from Damn</h1>
      <p>Resize the browser window to see the effect.</p>
    </div>

<?php

include "connectionSQL.php";

$uname = $_POST["uname"];
$status = $_POST["status"];
$time = $_POST["time"];
$content = $_POST["content"];

try
{
$sql  = "INSERT INTO mydb.demotb (UserBasicInfo, UserStatus, UserTime, UserContent)
                VALUES (?, ?, ?, ?);";
$stmt = $conn->prepare($sql);
$stmt->execute(array(
    $uname,
    $status,
    $time,
    $content
));
}
catch (PDOException $e)
{
    echo "ERROR: Could not able to execute";
}

include "showTable.php";
?>

<form method="post" action="main.php">
    <select name="subject[]">
        <option value="Open">Open</option>
        <option value="Update">Update</option>
        <option value="Insert">Insert</option>
        <option value="Delete">Delete</option>
    </select><br><br>
    <input type="submit" name="submit" value="Search">
</form>   
       

</body>
</html>