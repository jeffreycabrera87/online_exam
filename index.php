<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class = 'container'>
		<div id = 'loginHeader'><h1>Online Examination</h1></div>
		<div id = 'login'>
			
			<form name = "loginForm" action = "home.php" method = "POST">
				<h2>Login</h2>
				<input type = "email" id = "email" name = "email" placeholder = "E-mail">
				<div></div>
				<input type = "password" id = "password" name = "password" placeholder = "Password">
				<div></div>
				<input type = "submit" value = "Log In" id = "loginButton" class = 'btn btn-primary'>
			</form>
			<a href="register.php">Register</a>
		</div>
	</div>	



	<script type="text/javascript" src="js/jquery.1.10.2.js"></script>
	<script type="text/javascript" src="js/loginRegister.js"></script>

</body>
</html>




