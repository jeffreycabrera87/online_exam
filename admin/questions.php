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

include_once('functions/adminQuestionsDAO.php');
include_once('functions/adminQuestionsHandler.php');
$object = new adminQuestionsHandler();
$view = $object->viewQuestions();
	?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body>
	<div id = "questions">
	<table border = '0'>
		<tr>
	<?php
	while($row = $view->fetch_array()):
		?>
		<tr>
			<td><p><?=$row['q_number'] . ". " . $row['question']?></p></div></td>
		</tr>
		<tr>
			<td><p><?= "A. " . $row['a']?></p></td>	
		</tr>
		<tr>	
			<td><p><?= "B. " . $row['b']?></p></td>	
		</tr>
		<tr>
			<td><p><?= "C. " . $row['c']?></p></td>	
		</tr>
		<tr>
			<td><p><?= "D. " . $row['d']?></p></td>
		</tr>
		<tr>	
			<td><p><?= "Answer: " . $row['answer']?></p></td>
		</tr>
		<tr>
			<form action = 'editQuestion.php' method = 'GET'>
			<td><input type = 'hidden' name = 'id' value = '<?=$row['exam_id']?>'>
			<input type = 'submit' value = 'edit'>
			</form>
			<form action = 'deleteQuestion.php' method = 'GET' onsubmit = 'return verifyDelete()'>
			<input hidden name = 'id' value = '<?=$row['exam_id']?>'>	
			<input type = 'submit' id = 'delete' value = 'delete'></td>
			</form>
		<tr><td>
		</tr>
		</tr>
	
		<?php
		
	endwhile;
?>
</table>
<?php 
$rows = $view->num_rows;
if($rows < 10) { ?>
	<form method = 'POST' action = 'addQuestion.php'>
		<input type = 'submit' value = 'Add Question'>
	</form>
<?php	} ?>
</div>




<script type="text/javascript">
	function verifyDelete(){
		var x;
		var r = confirm("Press 'OK' to confirm delete");
		if(r == true){
			return true;
		}else{
			return false;
		}
	}

</script>
</body>
</html>