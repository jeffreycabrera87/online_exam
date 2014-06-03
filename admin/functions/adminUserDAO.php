<?php 
include_once('config.php');
class adminUserDAO{

	public static function viewUsers(){
		global $db;
		try{	
			$sql = "SELECT * FROM examinee";
			$result = $db->query($sql);
			return $result;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
	}

		public static function viewUsersById($id){
		global $db;
		try{
			$sql = "SELECT * FROM examinee WHERE user_id = '$id'";
			$result = $db->query($sql);
			return $result;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
	}

	public static function deleteUser($id){
		global $db;
		try{
			$sql = "DELETE FROM examinee WHERE user_id = '$id'";
			$result = $db->query($sql);
			return $result;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
	}

	public static function editUser($firstname, $lastname, $email, $password, $score, $id){
		global $db;
		try{
			$sql = "UPDATE examinee SET firstname = '$firstname', 
										lastname = '$lastname', 
										email = '$email', 
										password = '$password', 
										score = '$score' 
									WHERE user_id = '$id'";
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

	public static function addUser($firstname, $lastname, $email, $password){
		global $db;
		try{
			$sql = "INSERT INTO examinee(firstname, lastname, email, password, confirm) 
							 VALUES ('$firstname', '$lastname', '$email', '$password', '$password')";
			$result = $db->query($sql);
			return $result;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
	}
}

 ?>