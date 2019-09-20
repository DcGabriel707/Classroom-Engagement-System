<?php


	session_start();
	
	if ( isset( $_SESSION["user"] ) ) {
		
	} else {
		//redirect the user
		header( "location: mylogin.php" );
		
	}

?>
