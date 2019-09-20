<?php

	echo "hi";
    $QUIZNAME = $_POST["txtQuizName"];
	$QUIZDATE = $_POST["txtQuizDate"];
	$Q1 = $_POST["txtQ1"];
	$Q1C1 = $_POST["txtQ1C1"];
	$Q1C2 = $_POST["txtQ1C2"];
	$Q1C3 = $_POST["txtQ1C3"];
	$Q1C4 = $_POST["txtQ1C4"];
	$Q1A1 = $_POST["txtA1"];
	$Q2 = $_POST["txtQ2"];
	$Q2C1 = $_POST["txtQ2C1"];
	$Q2C2 = $_POST["txtQ2C2"];
	$Q2C3 = $_POST["txtQ2C3"];
	$Q2C4 = $_POST["txtQ2C4"];
	$Q2A2 = $_POST["txtA2"];
	$Q3 = $_POST["txtQ3"];
	$Q3C1 = $_POST["txtQ3C1"];
	$Q3C2 = $_POST["txtQ3C2"];
	$Q3C3 = $_POST["txtQ3C3"];
	$Q3C4 = $_POST["txtQ3C4"];
	$Q3A3 = $_POST["txtA3"];
	
	//echo $user . "<br>" . $pass . "<br>" . $name;
	$sql = "INSERT QUIZ_TABLE (QUIZ_NAME, QUIZ_DATE) VALUES ('$QUIZNAME', '$QUIZDATE')";
	$pickquiz1sql = "SELECT QUIZ_ID FROM QUIZ_TABLE WHERE QUIZ_NAME = '$QUIZNAME'";
    
	
	$host = "localhost";
	$myuser = "maks729";
	$mypass = "maks729";
	$db = "maks729";
	
	$con = mysqli_connect( $host, $myuser, $mypass, $db);
    mysqli_query($con, $sql);
	$rs = mysqli_query( $con, $pickquiz1sql);
    $row = mysqli_fetch_assoc($rs);
	$quizid = $row['QUIZ_ID'];
	//insert quiz questions
	$quiz1sql = "INSERT INTO QUESTION_TABLE (QUIZ_ID, QUESTION_TEXT, CHOICE_1, CHOICE_2, CHOICE_3, CHOICE_4, CORRECT_ANS) VALUES ('$quizid','$Q1', '$Q1C1', '$Q1C2', '$Q1C3', '$Q1C4', '$Q1A1')";
	$quiz2sql = "INSERT INTO QUESTION_TABLE (QUIZ_ID, QUESTION_TEXT, CHOICE_1, CHOICE_2, CHOICE_3, CHOICE_4, CORRECT_ANS) VALUES ('$quizid','$Q2', '$Q2C1', '$Q2C2', '$Q2C3', '$Q2C4', '$Q2A2')";
	$quiz3sql = "INSERT INTO QUESTION_TABLE (QUIZ_ID, QUESTION_TEXT, CHOICE_1, CHOICE_2, CHOICE_3, CHOICE_4, CORRECT_ANS) VALUES ('$quizid','$Q3', '$Q3C1', '$Q3C2', '$Q3C3', '$Q3C4', '$Q3A3')";
	
	mysqli_query($con, $quiz1sql);
	mysqli_query($con, $quiz2sql);
	mysqli_query($con, $quiz3sql);
	
	
	//todo safely prepare SQL insert here
	
	
	mysqli_close($con);
		
	echo "Results have been saved";

?>