<?php
session_start();
if(isset($_SESSION['firstname']) && isset($_SESSION['lastname'])){
	$firstname = $_SESSION['firstname'];
	$lastname = $_SESSION['lastname'];
}else{
	header('Location: index.php');
}

include_once('userFunctions/examDAO.php');
include_once('userFunctions/examHandler.php');

define('QUESTION_NUMBER', 10);

$q_number = (isset($_POST['q_number'])) 
		? $_POST['q_number'] + 1
		 : 1;

$answers = (isset($_POST['answers'])) 
		? $_POST['answers'] ++
		 : '';

$answer = (isset($_POST['answer'])) 
		? $_POST['answer'] 
		: '';
$answers .= $answer;

if($q_number > QUESTION_NUMBER) {
	session_start();
	$_SESSION['answers'] = $answers;
	header('Location: result.php');
}

$object = new examHandler();
$row =$object->getQuestion($q_number);
$q = mysql_fetch_array($row);
 

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/styleForExam.css">
</head>
	
	<header>
		<nav class = 'navbar navbar-default'>
			<div id = 'welcome'>
				<h4><?php	echo 'Hi, ' . $firstname . ' ' . $lastname . "!"; ?></h4>
			</div>
		</nav>
	</header>

	<body>
		<div id = "formBorder">
			<div class = 'container'>
				
				<form action = "<?= $_SERVER['PHP_SELF'] ?>" method = "POST">
					<input type = 'hidden' name = 'answers' value = "<?= $answers ?>" />
					<input type = 'hidden' name = 'q_number' value = "<?= $q_number ?>" /></br>
					<h1><?php echo $q_number . ". " . $q['question'];?></h1>
					<div id = "choices">	
						<p><input type = 'radio' id = 'btn' name = 'answer' value = 'A' /><?php echo "A.  " . $q['a'] ?></p><br />
						<p><input type = 'radio' id = 'btn' name = 'answer' value = 'B'/><?php echo "B.  " . $q['b'] ?></p><br />
						<p><input type = 'radio' id = 'btn' name = 'answer' value = 'C'/><?php echo "C.  " . $q['c'] ?></p><br />
						<p><input type = 'radio' id = 'btn' name = 'answer' value = 'D' /><?php echo "D.  " . $q['d'] ?></p><br />
						<input type = "submit" value = "Next" id = "submit" class = 'btn btn-primary'>
					</div>	
				</form>
			
			</div>
		</div>
	<script type="text/javascript" src = "js/jquery.1.10.2.js"></script>
	<script type="text/javascript" src = "js/exam.js"></script>

	</body>

</html>