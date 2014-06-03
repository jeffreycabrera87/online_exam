<?php 
session_start();
if(isset($_SESSION['username'])){

}else{
	header('Location: login.php');
}

include_once('functions/adminUserDAO.php');
include_once('functions/adminUserHandler.php');

if((isset($_POST['firstname'])) 
	&& (isset($_POST['lastname'])) 
	&& (isset($_POST['email'])) 
	&& (isset($_POST['password']))  
	&& (isset($_POST['score']))
	&& (isset($_POST['id']))){
	
	$firstname = $_POST['firstname'];
	$lastname =  $_POST['lastname'];
	$email = 	 $_POST['email'];
	$password =  $_POST['password'];
	$score = 	 $_POST['score'];
	$id = 		 $_POST['id'];

	$object = new adminUserHandler();
	
	if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password) && !empty($score) && !empty($id)){
		
		$object->editUser($firstname, $lastname, $email, $password, $score, $id);
		header('Location: users.php.');
	}else{
		header('Location: users.php');
		return false;
	}
}else{
	header('Location: users.php');
	return false;
}


?>
