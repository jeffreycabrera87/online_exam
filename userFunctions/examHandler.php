<?php  
include_once('db/connectDB.php');

class examHandler{

	public function getQuestion($id){
		if(empty($id)){
			return false;
		}
		
		$getQuestion = examDAO::getQuestion($id);

		if(empty($getQuestion)){
			return false;
		} else{
			return $getQuestion;	
		}
	}

	public function getAnswers(){	
		$getAnswers = examDAO::getAnswers();	
		if(empty($getAnswers)){
			return false;
		} else{
			return $getAnswers;	
		}	
	}

	public function checkAnswers($answers) {
		if(empty($answers)){
			return false;
		}
		
		$checkAnswers = examDAO::checkAnswers($answers);

		if(empty($checkAnswers)){
			return false;
		} else{
			return $checkAnswers;	
		}	
	}

}

?>