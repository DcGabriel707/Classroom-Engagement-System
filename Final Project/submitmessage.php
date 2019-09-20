<?php

	session_start();

	$message = $_POST["message"];
	$time =  date("Y-m-d H:i:s");
	$user = $_SESSION["user"];
	
	
	$sql = "INSERT INTO MESSAGES_TABLE (FIRST_NAME, MESSAGE, TIME) VALUES ('$user', '$message', '$time')";
	
	$host = "localhost";
	$myuser = "maks729";
	$mypass = "maks729";
	$db     = "maks729";
	
	$con = mysqli_connect( $host, $myuser, $mypass, $db );
	

	mysqli_query( $con, $sql  );
	
	// safely prepare SQL insert
	
	mysqli_close($con);
	


?>