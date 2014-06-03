<?php  
include_once('db/connectDB.php');

class examDAO{


	public static function getQuestion($q_number){
		try{
			$query = "SELECT question, a, b, c, d FROM exam WHERE q_number = '$q_number'";
			$result = mysql_query($query);
			return $result;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
		}

	

	public static function getAnswers(){			
		try{
			$query = "SELECT answer FROM exam ORDER BY q_number";
			$result = mysql_query($query);
			$answers = array();
			while($row = mysql_fetch_assoc($result)){
				$answers[] = $row['answer'];
			}
			return $answers;
		}catch (Exeption $e) {
			error_log(getMessage($e));
			}
				return false;
			}

	public static function checkAnswers($answers) {
		$correct = self::getAnswers();

		if($correct === false) {
			error_log("Not Ready");
		}
		if (count($correct) != strlen($answers)) {
			error_log("Invalid Answers");
			return false;
		}
		$score = 0;
		for ($i = 0; $i < count($correct); $i++){
			if($correct[$i] == $answers[$i]){
				$score++;
			}
		}
			return $score;
		}
}
?>