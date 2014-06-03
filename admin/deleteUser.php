<?php 
session_start();
if(isset($_SESSION['username'])){
	
}else{
	header('Location: login.php');
}

include_once('functions/adminUserDAO.php');
include_once('functions/adminUserHandler.php');

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$object = new adminUserHandler();
	$object->deleteUser($id);
	session_start();
	$_SESSION['id'] = $id;
	header('Location: deleteUserNotification.php');
}else{
	header('Location: Users.php');
}

?>
