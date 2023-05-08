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
      <h1>User</h1>
      <p>Be not afraid of greatness. Some are born great, 
        some achieve greatness, and others have greatness thrust upon them.</p>
    </div>

    <div class="row">
        <div class="leftcolumn">
          <div class="card">
            <h2>Login</h2>
            <h5>Title description, Jan 28, 2023 </h5>

            <form class="fakeimg" method="post" action="sqlmainUser.php">
              <label style="background-color: #ddd;">Insert values int SQL</label><br>
              <label hidden for="uname">User name:</label><br>
              <input hidden type="text" autocomplete = "off" id="uname" name="uname" ><br>
              <label for="status">Status:</label><br>
              <input type="text" autocomplete = "off" id="status" name="status" ><br>
  
              <label for="time">Time:</label><br>
              <input id="datetime" name="time" readonly>
                <script>
                  var date = new Date();
                  var current_date = (date.getFullYear()%2000)+"/"+(date.getMonth()+1)+"/"+ date.getDate()
                            +" "+date.getHours()+":"+date.getMinutes()+":"+date.getSeconds();
                  document.getElementById("datetime").value = current_date;
                </script>
  
              <br><br>
  
              <label for="content">Content:</label><br>
              <input type="text" autocomplete = "off" id="content" name="content" value="tesing"><br>
              <input hidden type="text" autocomplete = "off" id="sqltype" name="sqltype" value="insert"><br><br>
              <input type="submit" value="Submit">
            </form>
            <br>
  
  
            <form method="post" action="main.php">
              <select name="subject[]">
                <option value="Status">Status</option>
                <option value="Message">Message</option>
                <option value="Change">Change</option>
                <option value="DeleteU">Delete</option>
              </select><br><br>
              <input type="submit" name="submit" value="Search">
            </form>

            <p></p>
            <p>A sad thing in life is when you meet someone 
              who means a lot to you, only to find out in the end 
              that it was never meant to be and you just have to let go.</p>

          </div>
        </div>
        <div class="rightcolumn">
          <div class="card">
            <h2>Direction</h2>
            <p>We know what we are, but not what we may be.</p>
          </div>
        </div>
    
    </body>
</html>



