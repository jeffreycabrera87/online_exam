<?php  
include_once('userFunctions/userDAO.php');
include_once('userFunctions/userHandler.php');

$email = $_POST['email_exist'];
$object = new userHandler();
$email_exist = $object->emailExist($email);

if($email_exist > 0){
	echo "E-mail is already in use";
	return false;
}


?>