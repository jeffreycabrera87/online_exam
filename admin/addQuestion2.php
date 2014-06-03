<?php 
session_start();

if(isset($_SESSION['username'])){
	
}else{
	header('Location: login.php');
}
include_once('functions/adminQuestionsDAO.php');
include_once('functions/adminQuestionsHandler.php');

if((isset($_POST['question'])) 
	&& (isset($_POST['a'])) 
	&& (isset($_POST['b'])) 
	&& (isset($_POST['c'])) 
	&& (isset($_POST['d'])) 
	&& (isset($_POST['q_number'])) 
	&& (isset($_POST['answer']))){
	
	$question = $_POST['question'];
	$a = 		$_POST['a'];
	$b = 		$_POST['b'];
	$c = 		$_POST['c'];
	$d = 		$_POST['d'];
	$q_number = $_POST['q_number'];
	$answer = 	$_POST['answer'];

	if(!empty($question) && !empty($a) && !empty($b) && !empty($c) && !empty($d) && !empty($q_number) && !empty($answer)){
		$object = new adminQuestionsHandler();
		$qNumExist = $object->questionNumberExist($q_number);
		if($qNumExist === false){
			$object->addQuestion($question, $a, $b, $c, $d, $answer, $q_number);
			header('Location: questionAddedNotification.php');	
		}else{
			?>
			<script type="text/javascript">
				alert('Can\'t process that. Question Number already exist.');
				window.location = 'addQuestion.php'
			</script>
			<?php
		}
		
	}else{
		header('Location: questions.php');
	}
}else{
	header('Location: questions.php');
}

?>