
<!doctype html>
<?php
	include('mysecure.php');
	$quizid = $_GET["id"];
	$host = "localhost";
	$myuser = "maks729";
	$mypass = "maks729";
	$db     = "maks729";
	$user = $_SESSION["user"];
	$con = mysqli_connect( $host, $myuser, $mypass, $db );
	
	$choice1array = array();
	$choice2array = array();
	$choice3array = array();
	$choice4array = array();
	$correctansarray = array();
	$questiontextarray = array(); 
	

	$getQuizSQL = "SELECT * FROM QUIZ_TABLE WHERE QUIZ_ID = '$quizid'";
	$rs  = mysqli_query( $con, $getQuizSQL );
	$row = mysqli_fetch_assoc($rs);
	$quizname = $row["QUIZ_NAME"];
	// put this somewhere mysqli_close($con);
	
	
	
	$getQuestionSQL = "SELECT * FROM QUESTION_TABLE WHERE QUIZ_ID = '$quizid'";
	$rs  = mysqli_query( $con, $getQuestionSQL );
	
	$count = 0;
	while($row = mysqli_fetch_assoc($rs)) {
		$choice1array[$count] = $row["CHOICE_1"];
		$choice2array[$count] = $row["CHOICE_2"];
		$choice3array[$count] = $row["CHOICE_3"];
		$choice4array[$count] = $row["CHOICE_4"];
		$correctansarray[$count] = $row["CORRECT_ANS"];
		$questiontextarray[$count] = $row["QUESTION_TEXT"]; 
		$count = $count + 1;
	}
	echo " count = " . $count;

	
	if((!isset($_SESSION['questionCount']))){
		$_SESSION["questionCount"] = 0;
	} else if ($_SESSION['questionCount'] >= $count){ 
			
		//$updategradesql = "UPDATE ACCOUNT_TABLE SET Q1_SCORE = '$_SESSION["score"]' WHERE ACCOUNT_ID =  "
	
		header('Location: myquizscore.php');
	}
	
	
	if((!isset($_SESSION['score'])) || ($_SESSION['score'] >= 6)){
		$_SESSION["score"] = 0;
	}
	$qcount = $_SESSION["questionCount"];
	$score = $_SESSION["score"];
	echo " qcount = " . $qcount;
	echo $score;
	
	//todo to fix the problem on unintentional increment of score and question count, create a separate php file 
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
			var isCorrect = false;
			var score = <?= $score ?>
			
			function nextquestion(){
			
				<?php 
				$_SESSION["questionCount"] = $_SESSION["questionCount"] + 1;
				
				?>
				var count = "<?= $qcount ?>";
				if (isCorrect = true)
				increasescore();
				window.location.reload();
			}
			
			function selectans(selected){ <!-- I cant figure out a way to pass a parameter with whitespace-->
				isCorrect = false;
				if ( selected == "a" ) {
					var choice = "<?= $choice1array[$qcount] ?>";
				}
				else if ( selected == "b" ) {
					var choice = "<?= $choice2array[$qcount] ?>";
				}
				else if ( selected == "c" ) {
					var choice = "<?= $choice3array[$qcount] ?>";
				}
				else if ( selected == "d" ) {
					var choice = "<?= $choice4array[$qcount] ?>";
				}
			
				
				if (choice == "<?= $correctansarray[$qcount] ?>")
					isCorrect = true;
			
				
			}
			
			function increasescore(){
				if (isCorrect = true) {
					<?= $_SESSION["score"] =  $_SESSION["score"] +1 ?>
				}
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
			.grid-container {
				padding: 3vh;
				display: grid;
				grid-template-columns: auto auto;
				width: 100%;
				grid-column-gap: 2%;
				grid-row-gap: 2%;
				min-height: 40%;
			}
			
			.choiceBox:focus-within{
				border-radius: 75px;
			}
		
			.choiceBox{
				
				border: none;
				padding: 6%;
				margin: 1%;
				background-color: #01579b;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				border-radius: 25px;
				text-align: center;
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
						<div class= leftNavButton>
							Quit
						</div>
						<div class= rightNavButton  onclick = nextquestion()>
							Next
						</div>
				
				</div
				</font>
				<font size=5px color="#ffffff">
				<div id = questionBox>
					<?= $quizname ?>
					<br>
					Question <?= $qcount +1 ?>
					<br><br>
					<?= $questiontextarray[$qcount] ?>
				</div>
				<div class = grid-container>
					<div class = choiceBox tabindex="0" onclick = selectans("a")><!-- I cant figure out a way to pass a parameter with whitespace-->
						<?= $choice1array[$qcount] ?>
						
					</div>
					<div class = choiceBox tabindex="0" onclick = selectans("b")>
						<?= $choice2array[$qcount] ?>
					</div>
					<div class = choiceBox tabindex="0" onclick = selectans("c")>
						<?= $choice3array[$qcount] ?>
					</div>
					<div class = choiceBox tabindex="0" onclick = selectans("d")>
						<?= $choice4array[$qcount] ?>
					</div>
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



