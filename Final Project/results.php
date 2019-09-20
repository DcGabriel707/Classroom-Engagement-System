
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
	<table class="table">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Password</th>
	  <th scope="col">Delete?</th>
    </tr>
  </thead>
  
  
  <tbody>
  
<?php

	$sql = "SELECT * FROM ACCOUNTS_TABLE";
	
	$host = "localhost";
	$myuser = "maks729";
	$mypass = "maks729";
	$db     = "maks729";
	
	$con = mysqli_connect( $host, $myuser, $mypass, $db );
	$rs  = mysqli_query( $con, $sql  );
	
	while ( $row = mysqli_fetch_assoc($rs) ) {
	 ?>
		<tr>
		
			
			<td> <?= $row["ID"]   ?>   </td>
			<td> <?= $row["FIRST_NAME"] ?> </td>
			<td> <?= $row["LAST_NAME"] ?> </td>
			<td> <?= $row["PASSWORD"] ?> </td>
			<td> <a href="delete.php?id=<?= $row["USERID"]   ?>">Delete</td>
		</tr>
	<?php
	}   // end of my while loop
	
	mysqli_close($con);
	
	
?>

  
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

  </tbody>
</table>
  
   

	
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>



