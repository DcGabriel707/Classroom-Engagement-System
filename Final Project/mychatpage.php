
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<title>Class Chat</title>
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
			#mainBgColor{
				padding: 1%;
				-webkit-animation: bgcolor 20s infinite;
				animation: bgcolor 10s infinite;
				-webkit-animation-direction: alternate;
				animation-direction: alternate;
				height: 100%;
				width:100%;
			}
			
			#mainBg{
				padding: 1%;
				height: 100%;
				width:100%;
			}
			#innerBody{
				padding: 5%;
				overflow-y: scroll;
				border-color: coral;
				margin: 0 auto;
				height: 50%;
				width: 85%;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				border-radius: 25px;
			}
			div.messageBox{
				background-color: #0288D1;
				border-radius: 25px;
				padding: 15px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				
			}
			.timeText{
				float: right;
			}
			
			div.homeBox{
				background-color: white;
				float: left;
				border-radius: 25px;
				padding: 15px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				
			}
			.editTextBox{
				margin-top: 5%;
				background-color: #FF9800;
				padding: 10px;
				margin: 0 auto;
				
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				border-radius: 25px;
				position: fixed;
				bottom: 2%;
				left: 12%;
				right: 12%;
			}
			
			input[type=text] {
				background-color: #FB8C00;
				color: white;
				border-radius: 25px;
			}
			
			input[type=submit] {
				background-color: #03A9F4;
				border-radius: 25px;
			}
		</style>

	</head>
	<body>

		<div id = mainBgColor>
		
			<div class = homeBox> 
				<a href="secondhomepage.php">Home</a>
			</div>
			<div id = innerBody>
				<?php
				include('mysecure.php');
			$host = "localhost";
			$myuser = "maks729";
			$mypass = "maks729";
			$db     = "maks729";
				
			$user = $_SESSION["user"];
			
			//handle  send button
			if(isset($_POST['submit'])){
				$message = $_POST["message"];
				$time =  date("H:i m-d");
				$insertsql = "INSERT INTO MESSAGES_TABLE (FIRST_NAME, MESSAGE, TIME) VALUES ('$user', '$message', '$time')";
				$host = "localhost";
				$con = mysqli_connect( $host, $myuser, $mypass, $db );
				mysqli_query( $con, $insertsql  );
				// safely prepare SQL insert
				mysqli_close($con);
						
			}

			// retrieves messages from the database
			$sql = "SELECT * FROM MESSAGES_TABLE";
			$con = mysqli_connect( $host, $myuser, $mypass, $db );
			$rs  = mysqli_query( $con, $sql  );
			
			while ( $row = mysqli_fetch_assoc($rs) ) {
				?>
				<div class = messageBox>
					<font color="#ffffff">
						<h4><?= $row["FIRST_NAME"] ?>:
						<br><?= $row["MESSAGE"] ?></h4>
					</font>
					<font color="#CFD8DC">
						<div class = timeText>
							<h5><?= $row["TIME"]  ?></h5>
						</div>
						<br>
					</font>
				</div>
				<br>
				
				
				<?php
		}   // end of my while loop
		
		mysqli_close($con);
		
		?>
	
				
			</div>
			<div class = editTextBox>
				<form  method="POST">
					<input type="text" name="message"  class="form-control">
					<input type="submit" name="submit" value="send" >
					
				</form>
			</div>
		</div>
		
		<!-- Optional JavaScript -->
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			
	</body>
</html>



