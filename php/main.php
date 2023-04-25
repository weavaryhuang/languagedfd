<?php
if(isset($_POST["submit"])) 
	{ 
		// Checking if any option is selected 
		if(isset($_POST["subject"])) 
		{ 

			// Retrieve each selected option 
			foreach ($_POST['subject'] as $subject) 
				// print "You selected $subject<br/>"; 
                
            if($subject=="Open")
                include "openSql.php";
            if($subject=="Update")
                include "updateSql.php";
            if($subject=="Insert")
                include "User.php";
            if($subject=="Delete")
                include "deletSql.php";
        } 
        else echo "Select an option first !!"; 
    }
?>
