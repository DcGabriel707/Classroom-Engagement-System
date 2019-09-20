<?php
	$user = $_POST["txtUser"];
	$pass = $_POST["txtPass"];
	
	$sql = "SELECT ACCOUNT_ID, PASSWORD, FIRST_NAME,  COUNT(*) AS MYCOUNT 
	FROM ACCOUNT_TABLE WHERE ACCOUNT_ID = '$user' AND PASSWORD = '$pass' ";
	
	$host = "localhost";
	$myuser = "maks729";
	$mypass = "maks729";
	$db     = "maks729";
	
	$con = mysqli_connect( $host, $myuser, $mypass, $db );
	$rs = mysqli_query( $con, $sql  );
	$row = mysqli_fetch_assoc($rs);
	
	
	if ( $row["MYCOUNT"] == 1 ) {
	//start a user session
		session_start();
		$_SESSION["user"] = $row["FIRST_NAME"];
		header('Location: secondhomepage.php');
	}	else	{
		
		header('Location: mylogin.php');
	}
	
	mysqli_close($con);
?>

<html>

	<body>
	
		<h1>This is a secure area!</h1>
		<h2>Your first name is <?= $row["FIRST_NAME"]?></h2>
		<br>
		<h2>Your last name is <?= $row["LAST_NAME"]?></h2>
	</body>
	
</html>