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
      <p>To be, or not to be: that is the question.</p>
    </div>
<?php

include "SQL/tableSql.php";

?>


<br>
<script>

// var chk_pp = "?php include "phprd.php"; echo $data_r;?";
// if(chk_pp == "HEN"){
//     document.getElementById("openformR").style.display = "block";
//     document.getElementById("openformU").style.display = "none";
// }
// else{
//     document.getElementById("openformR").style.display = "none";
//     document.getElementById("openformU").style.display = "block";
// }

</script>

<form id="openformR" method="post" action="main.php">
    <select name="subject[]">
        <option value="Open">Open</option>
        <option value="Update">Update</option>
        <option value="Insert">Insert</option>
        <option value="Delete">Delete</option>
    </select>
    <input type="submit" name="submit" value="Search">
</form>

<!-- <form id="openformU" style="display: block;" method="post" action="main.php">
    <select name="subject[]">
        <option value="status">Status</option>
        <option value="message">Meassage</option>
        <option value="change">Change</option>
        <option value="Delete">Delete</option>
    </select>
    <input type="submit" name="submit" value="Search">
</form> -->
<!-- <div>
    <script>var chk_p = ?php echo $permissionUser;?;</script>
    <script>var chkPermission = (chk_p=='demotb')? 1: 0;</script>
    <script src = "../js/myFunction.js"></script>
<div>

<form id="postFormU" style="display: none;" method="post" action="main.php">
    <select name="subject[]">
        <option value="Status">Status</option>
        <option value="Message">Message</option>
        <option value="Change">Change</option>
    </select><br><br>
    <input type="submit" name="submit" value="Search">
</form>
    
<form id="postForm" style="display: none;" method="post" action="main.php">
    <select name="subject[]">
        <option value="Open">Open</option>
        <option value="Message">Message</option>
        <option value="Change">Change</option>
        <option value="Update">Update</option>
        <option value="Insert">Insert</option>
        <option value="Delete">Delete</option>
    </select><br><br>
    <input type="submit" name="submit" value="Search">
</form>

<script>validateForm();</script> -->


</br>


</body>
</html>