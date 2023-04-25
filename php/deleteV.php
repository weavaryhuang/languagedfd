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

try
{
$sql  = "DELETE FROM mydb.demotb WHERE UserId=?;";

$stmt = $conn->prepare($sql);
$stmt->execute(array(
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