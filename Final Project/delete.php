<?php

	$id = $_GET["id"];

	$sql = "DELETE FROM ACCOUNT_TABLE WHERE ACCOUNT_ID = $id";
	
	
	$host = "localhost";
	$myuser = "maks729";
	$mypass = "maks729";
	$db     = "maks729";
	
	$con = mysqli_connect( $host, $myuser, $mypass, $db );
	mysqli_query( $con, $sql  );
	
	// safely prepare SQL insert
	
	mysqli_close($con);
	
	header("Location:myaccounts.php");
	
?>

