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
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div>
	<body>

	</body>
</div>
</html>