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
$object = new adminUserHandler();
$view = $object->viewUsers();

?>

<html>
<head>
	<h4></h4>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div id = "questions">
	<body>
		<table border = '1'>
			<tr>
				<td align = 'center'><b>ID</b></td>
				<td align = 'center'><b>Firsname</b></td>
				<td align = 'center'><b>Lastname</b></td>
				<td align = 'center'><b>Email</b></td>
				<td align = 'center'><b>Password</b></td>
				<td align = 'center'><b>Score</b></td>
				<td align = 'center'><b>Edit</b></td>
				<td align = 'center'><b>Delete</b></td>
		<?php
		while($row = $view->fetch_array()):
			?>
		
			<tr>
				<td align = 'center'><?=$row['user_id']?></td>
				<td align = 'center'><?=$row['firstname']?></td>
				<td align = 'center'><?=$row['lastname']?></td>
				<td align = 'center'><?=$row['email']?></td>
				<td align = 'center'><?=$row['password']?></td>
				<td align = 'center'><?=$row['score']?></td>
				<form action = 'editUser.php' method = 'GET'>
						<input type = 'hidden' name = 'id' value = '<?=$row['user_id']?>'>
					<td align = 'center'><input type = 'submit' value = 'edit'></td>
				</form>
				<form action = 'deleteUser.php' method = 'GET' onsubmit = 'return verifyDelete()'>
						<input hidden name = 'id' value = '<?=$row['user_id']?>'>	
					<td align = 'center'><input type = 'submit' id = 'delete' value = 'delete'></td>
				</form>
			</tr>
		
			<?php
			
		endwhile;
	?>
	</table>

	<form method = 'POST' action = 'addUser.php'>
		<input type = 'submit' value = 'Add User'>
	</form>

	<script type="text/javascript">
		function verifyDelete(){
			var x;
			var r = confirm("Are you sure you want to delete this User?");
			if(r == true){
				return true;
			}else{
				return false;
			}
		}

	</script>
	</body>
</div>
</html>