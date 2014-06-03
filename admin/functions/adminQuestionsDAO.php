<?php 
include_once('config.php');
class adminQuestionsDAO{

	public static function editQuestion($question, $a, $b, $c, $d, $answer, $q_number, $exam_id){
		global $db;
		try{
			$sql = "UPDATE exam SET question = '$question', a = '$a', b = '$b', c = '$c', d = '$d', q_number = '$q_number',answer = '$answer' WHERE exam_id = '$exam_id'";
			if($result = $db->query($sql)){
				if($db->affected_rows == 1){
					return $result;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
	}

	public static function viewQuestions(){
		global $db;
		try{
			$sql = "SELECT * FROM exam ORDER BY q_number";
			$result = $db->query($sql);
			return $result;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;	
	}

	public static function viewQuestionById($id){
		global $db;
		try{
			$sql = "SELECT * FROM exam WHERE exam_id = '$id'";
			$result = $db->query($sql);
			return $result;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;	
	}

	public static function addQuestion($question, $a, $b, $c, $d, $answer, $q_number){
		global $db;
		try{
			$sql = "INSERT INTO exam(question, a, b, c, d, answer, q_number) 
							 VALUES ('$question', '$a', '$b', '$c', '$d', '$answer', $q_number) ";
			$result = $db->query($sql);
			return $result;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;	
	}

	public static function deleteQuestion($id){
		global $db;
		try{	
			$sql = "DELETE FROM exam WHERE exam_id = '$id'";
			$result = $db->query($sql);
			return $result;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;	
	}

	public static function questionNumberExist($q_number){
		global $db;
		try{
		$sql = "SELECT exam_id FROM exam WHERE q_number = '$q_number'";
		$result = $db->query($sql);
		if($result->num_rows) {
				return true;
			} else {
				return false;
			}
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
	}
}

 ?>

 