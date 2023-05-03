var datetime = new Date();

document.getElementById("time").innerHTML = datetime; 
document.getElementById('demo1').innerHTML = messageChange1();
document.getElementById('demo2').innerHTML = messageChange2();


function colorChange() {
		if (chk == 1) 
		  document.getElementById('demo1').style.color = 'green'
		else
		  document.getElementById('demo1').style.color = 'red'
	}

function validateForm() {
		if (chkPermission == 1) {
			document.getElementById("postForm").style.display = "block";
		}
		else if (chkPermission != 1) {
			document.getElementById("postForm").style.display = "none";
		//   alert("Not match");
		  return false;
		}
	}

function messageChange1() {
		if (chk == 1)
		  // z.style.color = crimson;
		  return "Login Success";
		
		else
		  return "User Name and Status are Not matched";
	}

 function messageChange2() {
		if (chk == 1) 
		  return "If music be the food of love, play on";
		else
		  return "A sad thing in life is when you meet someone who means a lot to you,"
		  + "only to find out in the end that it was never meant to be and you just have to let go.";
	}

function connectTest(){
        window.open("http://localhost/web_dev/php/connectionSql.php", "_blank")
    } 