<?php

include_once "phprd.php";
$permissionUser = $data_r;
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
                include "openV.php";
            if($subject=="Status")
                include "statusV.php";
            if($subject=="Message")
                include "messageV.php";
            if($subject=="Change")
                include "changeV.php";
            if($subject=="Update")
                include "updateV.php";
            if($subject=="Insert")
                include "insertV.php";
            if($subject=="Delete")
                include "deleteV.php";
        } 
        else echo "Select an option first !!"; 
    }
?>
