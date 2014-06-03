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
	&& (isset($_POST['answer']))
	&& (isset($_POST['q_number']))
	&& (isset($_POST['id']))){
	
	$question = $_POST['question'];
	$a = 		$_POST['a'];
	$b = 		$_POST['b'];
	$c = 		$_POST['c'];
	$d = 		$_POST['d'];
	$answer = 	$_POST['answer'];
	$q_number = $_POST['q_number'];
	$id = 		$_POST['id'];

	$object = new adminQuestionsHandler();
	
	if(!empty($question) && !empty($a) && !empty($b) && !empty($c) && !empty($d) && !empty($answer) && !empty($q_number) && !empty($id)){
		
		$object->editQuestion($question, $a, $b, $c, $d, $answer, $q_number, $id);
		header('Location: questions.php');
	}else{
		header('Location: questions.php');
		return false;
	}
}else{
	header('Location: questions.php');
	return false;
}


?>
