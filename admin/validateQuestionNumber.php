<?php  
include_once('functions/adminQuestionsDAO.php');
include_once('functions/adminQuestionsHandler.php');

$questionNumber = $_POST['q_num'];
$object = new adminQuestionsHandler();
$q_num = $object->questionNumberExist($questionNumber);

if($q_num === true){
	echo "Not Available!";
	return 1;
}else{
	echo "Available";
}


?>