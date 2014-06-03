<?php 
include_once('functions/adminloginDAO.php');
include_once('functions/adminLoginHandler.php');

if((isset($_POST['username'])) && (isset($_POST['password']))){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$object = new adminLoginHandler();
	$verifyLogin = $object->verifyLogin($username, $password);
	if($verifyLogin === true){
		session_start();
		$_SESSION['username'] = $username;
		header('Location: home2.php');
	}else{
		header('Location: login.php');
	}
}else{
	header('Location: login.php');
}

?>

