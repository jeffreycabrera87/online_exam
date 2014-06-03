<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id = 'loginHeader'>
	<h2>Administrator Login</h2>
</div>
<div id = 'login'>
	<form action = 'home.php' method = 'post' onsubmit = 'return validateLogin()'>
		<table border = '0' cellpadding = '45px'>
			<tr>	
				<td><input type = 'text' name = 'username' id = 'username' placeholder = 'Username'/><br>
				<input type = 'password' name = 'password' id = 'password' placeholder = 'Password'/><br>
				<input type = 'submit' value = 'Log In' id = 'submitLogin'></td>
			</tr>		
		</table>	
	</form>
</div>
	<script type="text/javascript" src = "js.jquery.js"></script>
	<script type="text/javascript">
		function validateLogin(){
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;

			if(username == "" || password == ""){
				alert('Invalid username or password');
				return false;
			}
		}

		$(document).ready(function() {
			$('#login').hover()
		});
	</script>

</body>
</html>