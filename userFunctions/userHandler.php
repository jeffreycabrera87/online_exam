<?php
include_once('db/connectDB.php');

class userHandler{

	public function createUser($fname, $lname, $email, $password, $confirm){
		if(empty($fname)){
			return false;
		}
		if(empty($lname)){
			return false;
		}
		if(empty($email)){
			return false;
		}
		if(empty($password)){
			return false;
		}
		if(empty($confirm)){
			return false;
		}
		
		if (strlen($fname) < 1){
			return false;
		}

		if (strlen($lname) < 1){
			return false;
		}

		if (strlen($email) < 1){
			return false;
		}

		if (strlen($password) < 1){
			return false;
		}

		if (strlen($confirm) < 1){
			return false;
		}

		$createUser = userDAO::createUser($fname, $lname, $email, $password, $confirm);
		if(empty($createUser)){
			return false;
		} else{
			return $createUser;	
		}
	
	}

	public function emailExist($email){
		if(empty($email)){
			return false;
		}

		$emailExist = userDAO::emailExist($email);
		if(empty($emailExist)){
			return false;
		} else{
			return $emailExist;	
		}	
	}

	public function user_id_from_email($email){
		if(empty($email)){
			return false;
		}

		$user_id_from_email = userDAO::user_id_from_email($email);
		if(empty($user_id_from_email)){
			return false;
		} else{
			return $user_id_from_email;	
		}
	
	}

	public function login($email, $password){
		if(empty($email)){
			return false;
		}

		if(empty($password)){
			return false;
		}


		$login = userDAO::login($email, $password);
		if(empty($login)){
			return false;
		} else{
			return $login;	
		}
	
	}

	public function get_user_by_email($email){
		if(empty($email)){
			return false;
		}

		$get_user_by_email = userDAO::get_user_by_email($email);
		if(empty($get_user_by_email)){
			return false;
		} else{
			return $get_user_by_email;	
		}
	
	}

	public static function recordScore($score, $email){
		if(empty($score)){
			return false;
		}

		if(empty($email)){
			return false;
		}

		$recordScore = userDAO::recordScore($score, $email);
		if(empty($recordScore)){
			return false;
		} else{
			return $recordScore;	
		}

	}

}