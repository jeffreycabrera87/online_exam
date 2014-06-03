<?php 

class adminQuestionsHandler{

	public function editQuestion($question, $a, $b, $c, $d, $answer, $q_number, $exam_id){

		if(empty($question)){
			return false;
		}
		if(empty($a)){
			return false;
		}
		if(empty($b)){
			return false;
		}
		if(empty($c)){
			return false;
		}
		if(empty($d)){
			return false;
		}
		if(empty($answer)){
			return false;
		}
		
		if (strlen($answer) !== 1){
			return false;
		}
		$editQuestion = adminQuestionsDAO::editQuestion($question, $a, $b, $c, $d, $answer, $q_number, $exam_id);
		if(empty($editQuestion)){
			return false;
		} else{
			return $editQuestion;	
		}
	}
		
	public function viewQuestions(){
		$viewQuestions = adminQuestionsDAO::viewQuestions();
		if(empty($viewQuestions)){
			return false;
		}else{
			return $viewQuestions;	
		}
				
	}

	public function viewQuestionById($id){
		if(empty($id)){
			return false;
		}

		$viewQuestionById = adminQuestionsDAO::viewQuestionById($id);

		if(empty($viewQuestionById)){
			return false;
		}else{
			return $viewQuestionById;
		}
	}

	public function addQuestion($question, $a, $b, $c, $d, $answer, $q_number){
		if(empty($question)){
			return false;
		}
		if(empty($a)){
			return false;
		}
		if(empty($b)){
			return false;
		}
		if(empty($c)){
			return false;
		}
		if(empty($d)){
			return false;
		}
		if(empty($q_number)){
			return false;
		}
		if(empty($answer)){
			return false;
		}
		
		if (strlen($answer) !== 1){
			return false;
		}

		$addQuestion = adminQuestionsDAO::addQuestion($question, $a, $b, $c, $d, $answer, $q_number);

		if(empty($addQuestion)){
			return false;
		} else{
			return $addQuestion;	
		}
	}

	public static function deleteQuestion($id){
		if(empty($id)){
			return false;
		}

		$deleteQuestion = adminQuestionsDAO::deleteQuestion($id);

		if(empty($deleteQuestion)){
			return false;
		}else{
			return $deleteQuestion;
		}
	}	

	public static function questionNumberExist($q_number){
			if(empty($q_number)){
			return false;
		}

		$questionNumberExist = adminQuestionsDAO::questionNumberExist($q_number);

		if(empty($questionNumberExist)){
			return false;
		}else{
			return $questionNumberExist;
		}
	}
}

 ?>