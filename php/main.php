<?php

include_once "phprd.php";
$permissionUser = $data_r;


if($permissionUser == "HEN")
    $permissionUser = "demotb";
 

// echo $permissionUser;
// $subject = "Open";

if(isset($_POST["submit"])) 
	{ 
		// Checking if any option is selected s
		if(isset($_POST["subject"])) 
		{ 

			// Retrieve each selected option 
			foreach ($_POST['subject'] as $subject) 
			// print "You selected $subject<br/>"; 
                
            if($subject=="Open")
                include "openrootV.php";
            if($subject=="Status")
                include "openuserV.php";
            if($subject=="Message")
                include "MessageV.php";
            if($subject=="Change")
                include "ChangeV.php";
            if($subject=="Update")
                include "updateV.php";
            if($subject=="Insert")
                include "insertV.php";
            if($subject=="DeleteU")
                include "deleteuserV.php";
            if($subject=="Delete")
                include "deleteV.php";
        } 
        else echo "Select an option first !!"; 
    }
?>
