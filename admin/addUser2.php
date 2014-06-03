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
	&& (isset($_POST['password']))){
	
	$firstname = $_POST['firstname'];
	$lastname =  $_POST['lastname'];
	$email = 	 $_POST['email'];
	$password =  $_POST['password'];

	if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)){
		$object = new adminUserHandler();
		$object->addUser($firstname, $lastname, $email, $password);
		header('Location: userAddedNotification.php');
	}else{
		header('Location: users.php');
	}
}else{
	header('Location: users.php');
}

?>