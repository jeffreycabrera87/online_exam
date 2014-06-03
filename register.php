<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<header>
	<nav class = 'navbar navbar-default'>
		<div id = 'signIn'><a href = "index.php">Sign In</a></div>
	</nav>
</header>
<body style>
	<div class = 'container'>
		
		<div id = 'registerHeader'><h1>Online Examination</h1></div>
			<div id = 'registerForm'>
				<form method="POST" action="register2.php" name = "registerForm" enctype = "multipart/form-data">
					<h2>Register</h2>
					<input type="text" name="firstname" id="firstname" placeholder = "First Name" />
					<div id = "line"></div>
					<input type="text" name="lastname" id="lastname"placeholder = "Last Name" />	
					<div></div>
					<input type="email" name="email1" id = "email_input" placeholder = "Email Address"/>
					<div id = 'emailHtml'></div>
					<input type="password" name="password1" id = "password1" placeholder = "Password"/>	
					<div></div>
					<input type="password" name="password2" id= "confirm" placeholder = "Confirm Password"/>
					<div id = 'confirmPass'></div>
					<div></div>
					Choose a Profile Picture 
					<div></div>
					<input type='file' name='file' id='file'>
					<div></div>
					<input type="submit" value = "Register" id="register2" class="btn btn-primary pull-right">	
				</form>
			</div>
	</div>
	<script type="text/javascript" src="js/jquery.1.10.2.js"></script>
	<script type="text/javascript" src="js/loginRegister.js"></script>
</body>
</html>