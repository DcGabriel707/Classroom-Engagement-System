 <?php
 
	session_start();
	$score = $_SESSION['score'];
	$qcount = $_SESSION['questionCount'] -1;
 
 ?>
<html lang="en">
	<head>
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Quiz</title>
		
		<script>
			function home(){
				
				
				window.location.href="secondhomepage.php";
				
			}
			
		</script>
		
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
				height: 100vh;
				width:100%;
			}
			
			#mainBg{
				height: 100vh;
				width:100%;
			}
			#questionBox{				
				vertical-align: middle;
				padding: 5%;
				height: 50%;
				margin: 0 auto;
				width: 90%;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				border-radius: 25px;
				text-align: center;
				background-color: #01579b;
			}
			
			#header{
				margin: 1%;
				width: 100%;
				height: 5%;
			}
			.leftNavButton{
				background-color: #546e7a;
		
				width: 20vh;
				height: 100%;
				float: left;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				border-radius: 25px;
				text-align: center;
			}
			.rightNavButton{
				background-color:  #546e7a;
				
				width: 20vh;
				height: 100%;
				float: right;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				border-radius: 25px;
				text-align: center;
			}
			
		</style>
		
		
	</head>
	<body>
		
		<div id = mainBgColor>
				<font size=4px color="#ffffff">
				<div id = header>
						<div class= rightNavButton  onclick = home()>
							Home
						</div>
				
				</div
				</font>
				<font size=5px color="#ffffff">
				<div id = questionBox>
				
					<br>
					Your Score is
					<br><br>
					<?= $score - $qcount ?> / <?= $qcount  ?> <!--fix bug -->
				</div>
				
				
			</font>
			
		</div>
		
		<!-- Optional JavaScript -->
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			
	</body>
</html>
