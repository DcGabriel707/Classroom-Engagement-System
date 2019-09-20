
<?php

	session_start();

	//$user = $_SESSION["user"];
	
	session_destroy();


?>
<html>
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
		<div id =mainbg>
		<h1>The user has successfully logged out!</h1>
		</div>
	</body>
</html>