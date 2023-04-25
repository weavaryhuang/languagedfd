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


    <form class="fakeimg" method="post" action="deleteV.php">
        <!-- <form action="test2.php"> -->
        <label style="background-color: #ddd;">Insert values int SQL</label><br>
        <label for="userid">User ID:</label><br>
        <input type="text" autocomplete = "off" id="userid" name="userid"><br>
        <br>
        <input type="submit" value="Submit">
    </form>
<br>
    
<form method="post" action="main.php">
    <select name="subject[]">
        <option value="Open">Open</option>
        <option value="Update">Update</option>
        <option value="Insert">Insert</option>
        <option value="Delete">Delete</option>
    </select>
    <input type="submit" name="submit" value="Search">
</form>   
       
    


</br>

</body>
</html>