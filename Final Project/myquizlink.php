<!doctype html>
<html lang="en">
  <head>
  <style>
   @keyframes bgcolor {
				0% {
					background-color: #45a3e5
				}
				30% {
					background-color: #66bf39
				}
				60% {
					background-color: #eb670f
				}
				90% {
					background-color: #f35
				}
				100% {
					background-color: #864cbf
				}
			}
			#mainbg{
				padding: 1%;
				-webkit-animation: bgcolor 20s infinite;
				animation: bgcolor 10s infinite;
				-webkit-animation-direction: alternate;
				animation-direction: alternate;
				height: 100%;
				width:100%;
			}
		.button{
		        padding: 5%;
				margin: 0 auto;
				height: 650px;
				width: 50%;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				border-radius: 25px
				}
		.button2{
                 margin: 0 auto;
				 text-align: center
              				 }
			
			
			input[type=text] {
				background-color: #03A9F4;
				color: white;
				border-radius: 25px;
			}
			
			#quiz{
			    text-align: center;
			    margin: 0 auto;
				background-color: #03A9F4;
				color: white;
				border-radius: 25px;
			}
			
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
	</head>
	<body>
	<div id =quiz>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Quiz Name</th>
      <th scope="col">Date</th>
      </tr>
  </thead>
  
  
  <tbody>
  
  <?php
	include('mysecure.php');
	
	$_SESSION["questionCount"] = 0;
	$_SESSION["score"] = 0; 

	$sql = "SELECT QUIZ_ID, QUIZ_NAME, QUIZ_DATE FROM QUIZ_TABLE";
	
	$host = "localhost";
	$myuser = "maks729";
	$mypass = "maks729";
	$db     = "maks729";
	
	$con = mysqli_connect( $host, $myuser, $mypass, $db );
	$rs  = mysqli_query( $con, $sql  );
	
	while ( $row = mysqli_fetch_assoc($rs) ) {
	 ?>
		<tr>			
			<td> <a href = "myquiz.php?id=<?= $row["QUIZ_ID"]   ?>"> <?= $row["QUIZ_NAME"]?>    </td>
			<td> <?= $row["QUIZ_DATE"] ?> </td>
			<td> <a href="delete.php?id=<?= $row["QUIZ_NAME"]   ?>">Delete</td>
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
</html>
