<?php
	$user = $_POST["txtID"];
	$fname = $_POST["txtFirstName"];
	$lname = $_POST["txtLastName"];
	$class = $_POST["txtClass"];
	$pass = $_POST["txtPass"];
	
	
	//echo $user . "<br>" . $pass . "<br>" . $name;
	
	$sql = "INSERT INTO ACCOUNT_TABLE (ACCOUNT_ID, FIRST_NAME, LAST_NAME, CLASSIFICATION, PASSWORD) VALUES ('$user', '$fname', '$lname', '$class', '$pass')";
	
	$host = "localhost";
	$myuser = "maks729";
	$mypass = "maks729";
	$db = "maks729";
	
	$con = mysqli_connect( $host, $myuser, $mypass, $db);
	mysqli_query( $con, $sql);
	
	//todo safely prepare SQL insert here
	
	session_start();
	$_SESSION["user"] = $user;
	mysqli_close($con);
		
	header("Location: secondhomepage.php");	
	echo "Results have been saved";

?>