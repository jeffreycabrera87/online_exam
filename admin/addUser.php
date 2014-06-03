<?php 
include 'background.php';
session_start();
?>
<div id = 'user'>
<?php
if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	echo 'Hi, ' . $username . "!";
}else{
	header('Location: login.php');
}
?>
</div>


<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<div id = "questions">
	<body>
		<table>
			<form method = 'POST' action = 'addUser2.php' onsubmit = 'return validateAdd()'>
				<tr>		
					<td>Firstname: <td><input type = 'text' id = 'firstname' name = 'firstname' /><br />
				<tr></tr>	
					<td>Lastname: <td><input type = 'text' id = 'lastname' name = 'lastname' /><br />
				<tr></tr>	
					<td>Email: <td><input type = 'text' id = 'email' name = 'email' /><td id = 'emailExist'><br />
				<tr></tr>	
					<td>Password: <td><input type = 'text' id = 'password' name = 'password' /><br />
				<tr></tr>
					<td>		  <td><input hidden name = 'id' /><br />
				<tr></tr>		
					<td>		  <td><input type = 'submit' value = 'Add'>
			</form>
								  <input type = 'submit' value = 'Cancel' onclick = 'cancelAdd()'>
				</tr>
		</table>

		<script type="text/javascript" src = "js/jquery.js"></script>
		<script type="text/javascript" src = "js/checkQuestionNumber.js"></script>
		<script type="text/javascript">
			function validateAdd(){
				var firstname = 	document.getElementById('firstname').value;
				var lastname = 		document.getElementById('lastname').value;
				var email = 		document.getElementById('email').value;
				var password = 		document.getElementById('password').value;

				if(firstname == "" || lastname == "" || email == "" || password == ""){
					alert('You need to fill all fields!');
					return false;
				}
			}

			function cancelAdd(){
				window.location = 'users.php'
			}
		</script>
	</body>
</div>
</html>