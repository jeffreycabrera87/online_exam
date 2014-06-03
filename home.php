<?php  
include_once('userFunctions/userDAO.php');
include_once('userFunctions/userHandler.php');

if((isset($_POST['email'])) && (isset($_POST['password']))){
	$email = $_POST['email'];
	$password = $_POST['password'];

	if($email && $password !== NULL){
		$object = new userHandler();
		$login = $object->login($email, $password);
		if($login === false){
			header('Location: index.php');
			exit();
		}else {
			$object = new userHandler();
			$row = $object->get_user_by_email($email);
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['firstname'] = $firstname;
			$_SESSION['lastname'] = $lastname;
		}
	}else{
		header('Location: index.php');
	}
}

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id = 'welcome'>
		<div id = 'welcomeNote'>
	    	<p>Welcome to Online Examination,<?php echo " " . $firstname . " " . $lastname . "!"; ?>.</p> 
	    	<p>This examination is composed of 10 questions only.</10>
    		<p>You need to get a score of atleast 7 points to be able to pass.</p>
    	</div>
    	<input type = "submit" value = "Start!" id = "start" class="btn btn-primary pull-right">
	</div>   	
	

<script type="text/javascript" src = "js/jquery.1.10.2.js"></script>
<script type="text/javascript">
	$('#start').click(function(){
		window.location = 'exam.php'
	});

</script>
</body>
</html>