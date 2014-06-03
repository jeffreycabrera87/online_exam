<?php 
session_start();
if(isset($_SESSION['username'])){
	
}else{
	header('Location: login.php');
}

include_once('functions/adminQuestionsDAO.php');
include_once('functions/adminQuestionsHandler.php');

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$object = new adminQuestionsHandler();
	$object->deleteQuestion($id);
	session_start();
	$_SESSION['id'] = $id;
	header('Location: deleteQuestionNotification.php');
}else{
	header('Location: questions.php');
}

?>

<script type="text/javascript"></script>