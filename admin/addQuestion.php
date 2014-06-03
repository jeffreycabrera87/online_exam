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
<div id = "questions">
	<body>
		<table>
			<form method = 'POST' action = 'addQuestion2.php' onsubmit = 'return validateAdd()'>
				<tr>
					<td>Question Number: <td><select id="q_number" name = 'q_number'>
						<option value="">---</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
				        <option value="5">5</option>
				        <option value="6">6</option>
				        <option value="7">7</option>
				        <option value="8">8</option>
				        <option value="9">9</option>
				        <option value="10">10</option>			  
					</select><td id = 'qNumber'><br />
				<tr></tr>			
					<td>Question: <td><textarea id = 'question' name = 'question' id = 'question' cols = '30' rows = '8'></textarea><br />
				<tr></tr>	
					<td>Choice A: <td><input type = 'text' id = 'a' name = 'a' /><br />
				<tr></tr>	
					<td>Choice B: <td><input type = 'text' id = 'b' name = 'b' /><br />
				<tr></tr>	
					<td>Choice C: <td><input type = 'text' id = 'c' name = 'c' /><br />
				<tr></tr>	
					<td>Choice D: <td><input type = 'text' id = 'd' name = 'd' /><br />
				<tr></tr>
					<td>Answer: <select id="answer" name = 'answer'>
						<option value="">---</option>
				        <option value="A">A</option>
				        <option value="B">B</option>
				        <option value="C">C</option>
				        <option value="D">D</option>
	    			</select>
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
				var q_number = 	document.getElementById('q_number').value;
				var question = 	document.getElementById('question').value;
				var a = 		document.getElementById('a').value;
				var b = 		document.getElementById('b').value;
				var c = 		document.getElementById('c').value;
				var d = 		document.getElementById('d').value;
				var answer = 	document.getElementById('answer').value;
				var qNumber =	document.getElementById('qNumber').value;

				if(q_number == "" || answer == "" || a == "" || b == "" || c == "" || d == "" || answer == ""){
					alert('You need to fill all fields!');
					return false;
				}

				if(qNumber === 1){
					alert("Question Number is not available.");
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