<!DOCTYPE html>
<html lang="en">
<head>
<title>Login System</title>
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
      <p>Resize the browser window to see the effect.</p>
    </div>



<form class="fakeimg" method="post" action="updateSql.php">
    <!-- <form action="test2.php"> -->
    <label style="background-color: #ddd;">Insert values int SQL</label><br>
    <label for="userid">User ID:</label><br>
    <input type="text" autocomplete = "off" id="userid" name="userid" required><br>
    <label for="uname">User name:</label><br>
    <input type="text" autocomplete = "off" id="uname" name="uname"><br>
    <label for="content">Content:</label><br>
    <input type="text" autocomplete = "off" id="content" name="content" value="tesing"><br>
    <input type="submit" value="Submit">
</form>


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