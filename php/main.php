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
                include "ROOT/openrootV.php";
            if($subject=="Delete")
                include "ROOT/deleteV.php";
            if($subject=="Update")
                include "ROOT/updateV.php";
            if($subject=="Insert")
                include "ROOT/insertV.php";


            if($subject=="Status")
                include "USER/openuserV.php";
            if($subject=="Message")
                include "USER/MessageV.php";
            if($subject=="Change")
                include "USER/ChangeV.php";
            if($subject=="DeleteU")
                include "USER/deleteuserV.php";
        } 
        else echo "Select an option first !!"; 
    }
?>
