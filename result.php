<?php 
include_once('userFunctions/examDAO.php');
include_once('userFunctions/examHandler.php');
include_once('userFunctions/userDAO.php');
include_once('userFunctions/userHandler.php');

session_start();
$answers = $_SESSION['answers'];
$email = $_SESSION['email'];
if(isset($_SESSION['firstname']) && isset($_SESSION['lastname'])){
	$firstname = $_SESSION['firstname'];
	$lastname = $_SESSION['lastname'];s
}else{
	header('Location: index.php');
}
$object = new examHandler();

$result = $object->checkAnswers($answers);
if($result == ""){
	$result = 0;
}

$objectforUser = new userHandler();
$objectforUser->recordScore($result, $email);
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
	<div class = 'container'>
		<div id = "formBorder2">
			<div id = "result">	 
				<?php echo "<h1>Your Score is " . $result . "</h1><br><br><br>";
					if($result >= 7){
						echo "<h1 style = 'color: blue'>Congratulations! You Passed!</h1>";
					}else{
						echo "<h1 style = 'color: red'>Sorry! You Failed!</h1>";
					}
				?>
				<input type = "submit" value = "Exit" id = "exitButton" class = 'btn btn-primary'>	
			</div>		
			
		</div>

	</div>	
<script type="text/javascript" src = "js/jquery.1.10.2.js"></script>
<script>

	$('#exitButton').click(function() {
		window.location = 'exit.php'
	});
</script>
</body>
</html>