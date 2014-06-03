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

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$object = new adminQuestionsHandler();
	$row = $object->viewQuestionById($id);
		$view = $row->fetch_array();
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div id = "questions">
	<body>
		<form method = 'POST' action = 'editQuestion2.php' onsubmit = 'return validateEdit()'>
			<table>
				<tr>
					<td>Question Number: <td><?php $q = array(1 ,2 ,3, 4, 5, 6, 7, 8, 9, 10);
						?>
						<select name = 'q_number' id = 'q_number'>
						<?php for($i = 0; $i < 10; $i++) { ?>
						    <option value="<?php echo $q[$i]; ?>" <?php if ($view['q_number'] == $q[$i]) {echo 'selected';} ?>><?php echo $q[$i]; ?>
						    </option> 
						<?php } ?>
						</select><td id = 'qNumber'><br />
				<tr></tr>		
					<td>Question: <td><textarea id = 'question' name = 'question' id = 'question' cols = '30' rows = '8'><?=$view['question']?></textarea><br />
				<tr></tr>	
					<td>Choice A: <td><input type = 'text' id = 'a' name = 'a' value = '<?=$view['a']?>' /><br />
				<tr></tr>	
					<td>Choice B: <td><input type = 'text' id = 'b' name = 'b' value = '<?=$view['b']?>' /><br />
				<tr></tr>	
					<td>Choice C: <td><input type = 'text' id = 'c' name = 'c' value = '<?=$view['c']?>' /><br />
				<tr></tr>	
					<td>Choice D: <td><input type = 'text' id = 'd' name = 'd' value = '<?=$view['d']?>' /><br />
				<tr></tr>	
					<td>Answer : <td><?php $areas = array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D');
						?>
						<select name = 'answer'>
						<?php foreach ($areas as $value => $text): ?>
						    <option value="<?php echo $value; ?>" <?php if ($view['answer'] == $value) {echo 'selected';} ?>><?php echo $text; ?>
						    </option> 
						<?php endforeach; ?>
						</select>
		 				<br />
				<tr></tr>		
					<td>		  <td><input hidden name = 'id' value = '<?=$view['exam_id']?>' /><br />
				<tr></tr>		
					<td><td><input type = 'submit' value = 'Save'>
						<input type = 'submit' value = 'Cancel' onclick = 'cancelAdd()'>
				</tr>
			</table>
		</form>

	<script type="text/javascript" src = "js/jquery.js"></script>
	<script type="text/javascript" src = "js/checkQuestionNumber.js"></script>
	<script type="text/javascript">
			function validateEdit(){
				var question = 	document.getElementById('question').value;
				var a = 		document.getElementById('a').value;
				var b = 		document.getElementById('b').value;
				var c = 		document.getElementById('c').value;
				var d = 		document.getElementById('d').value;
				var answer = 	document.getElementById('answer').value;

				if(answer == "" || a == "" || b == "" || c == "" || d == "" || answer == ""){
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
