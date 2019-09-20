
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
				height: 100vh;
				width:100%;
			}
			.button{
		        padding: 5%;
				margin: 0 auto;
				height: 100;
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
			
			input[type=password] {
				background-color: #03A9F4;
				color: white;
				border-radius: 25px;
			}
				input[type=submit] {
				background-color: #03A9F4;
				color: white;
				border-radius: 25px;
			}
			
					
   </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>

    <div id = mainbg>
		<div class = button>
			<div class = button2>
			<font color="#ffffff">
			<h1>Login</h1>
			<form action="mychecklogin.php"  method="POST">
			
				Username: <br>
				<input type="text" name="txtUser" class="form-control">
				
				<br><br>
				
				Password: <br>
				<input type="password" name="txtPass" class="form-control">
				
				<br> <br>
				
				<input type="submit" value="Login" class="btn-primary">

			</form>
		  
			</font>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			
  </body>
</html>