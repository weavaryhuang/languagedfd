<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">

  
  
</head>
<body>
  
    <ul class="topnav">
    <li><a href="../index.html">Home</a></li>
    <li><a href="../login.html" class="active">Login</a></li>
    </ul>

    <div class="header">
      <h1>Dark from Damn</h1>
      <p>To be, or not to be: that is the question.</p>
    </div>

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

include "showTable.php";
?>

<form method="post" action="main.php">
    <select name="subject[]">
        <option value="Open">Open</option>
        <option value="Update">Update</option>
        <option value="Insert">Insert</option>
        <option value="Delete">Delete</option>
    </select>
    <input type="submit" name="submit" value="Search">
</form>  

</body>
</html>