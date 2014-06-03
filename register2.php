<?php  
include_once('userFunctions/userDAO.php');
include_once('userFunctions/userHandler.php');

$name = $_FILES['file']['name'];


if(isset($name)){
	if(!empty($name)){
		$tmp_name = $_FILES['file']['tmp_name'];
		$location = 'uploads/';

		move_uploaded_file($tmp_name, $location.$name));

		
	}
}

if((isset($_POST['firstname'])) && (isset($_POST['lastname'])) && (isset($_POST['email1'])) && (isset($_POST['password1'])) && (isset($_POST['password2']))){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email1'];
	$password = $_POST['password1'];
	$confirm = $_POST['password2'];

	if($firstname && $lastname && $email && $password && $confirm !== NULL){
		$email_exist = userDAO::emailExist($email);
		if($password == $confirm){
			if($email_exist == 0){	
				$object = new userHandler();
				$register = $object->createUser($firstname, $lastname, $email, $password, $confirm);
				?>
				<script type="text/javascript">
				alert('You are now registered.');
				window.location = 'index.php'
				</script>
				<?php

			}else{
				?>
				<script type="text/javascript">
					alert('Can\'t process registration. Email is already in use.');
					window.location = 'register.php'
				</script>
				<?php
			}
		}
	} 
}
?>