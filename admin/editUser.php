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
<?php
include_once('functions/adminUserDAO.php');
include_once('functions/adminUserHandler.php');

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$object = new adminUserHandler();
	$row = $object->viewUsersById($id);
		$view = $row->fetch_array();
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div id = "questions">
	<body>
		<form method = "POST" action = "editUser2.php" onsubmit = 'return validateEdit()'>
			<table>
				<tr>		
					<td>Firstname: <td><input type = 'text' id = 'firstname' name = 'firstname' value = '<?=$view['firstname']?>'/><br />
				<tr></tr>	
					<td>Lastname: <td><input type = 'text' id = 'lastname' name = 'lastname' value = '<?=$view['lastname']?>' /><br />
				<tr></tr>	
					<td>Email: <td><input type = 'email' id = 'email' name = 'email' value = '<?=$view['email']?>' /><br />
				<tr></tr>	
					<td>Password: <td><input type = 'text' id = 'password' name = 'password' value = '<?=$view['password']?>' /><br />
				<tr></tr>			
					<td>Score:   <td><input type = 'text' id = 'score' name = 'score' value = '<?=$view['score']?>' /><br />
				<tr></tr>		
					<td>		  <td><input type = 'hidden' name = 'id' value = '<?=$view['user_id']?>' /><br />
				<tr></tr>		
					<td>		  <td><input type = 'submit' value = 'Save'>
						<input type = 'submit' value = 'Cancel' onclick = 'cancelAdd()'>
				</tr>
			</table>
		</form>

	<script type="text/javascript">
			function validateEdit(){
				var firstname = 	document.getElementById('firstname').value;
				var lastname = 		document.getElementById('lastname').value;
				var email = 		document.getElementById('email').value;
				var password = 		document.getElementById('password').value;
				var score = 		document.getElementById('score').value;

				if(firstname == "" || lastname == "" || email == "" || password == "" || score == ""){
					alert('You need to fill all fields!');
					return false;
				}
			}

			function cancelAdd(){
				window.location = 'questions.php'
			}
	</script>
	</body>
</div>
</html>
