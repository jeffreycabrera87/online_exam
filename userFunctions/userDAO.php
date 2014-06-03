<?php
include_once('db/connectDB.php');

class userDAO{

	public static function createUser($fname, $lname, $email, $password, $confirm){
		try{
			$query = "INSERT INTO `examinee`(`firstname`, `lastname`, `email`, `password`, `confirm`) 
						VALUES ('$fname','$lname','$email','$password','$confirm')";
			$insert = mysql_query($query);
			return $insert;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
	}

	public static function emailExist($email){
		try{
			$query = "SELECT email FROM examinee WHERE email = '{$email}'";
			$result = mysql_query($query);
			$num_rows = mysql_num_rows($result);
			return $num_rows;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
	}

	public static function user_id_from_email($email){
		try{
			$user_id_from_email = mysql_result(mysql_query("SELECT user_id FROM examinee WHERE email = '$email'"), 0, 'user_id');
			return $user_id_from_email;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
	}

	public static function login($email, $password){
		try{
			$user_id = userDAO::user_id_from_email($email);
			$query = "SELECT COUNT(`user_id`) FROM examinee WHERE email = '$email' AND password = '$password'";
			$result = (mysql_result(mysql_query($query), 0) == 1) ? $user_id : false;
			return $result;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
	}

	public static function get_user_by_email($email){
		try{
			$query = "SELECT firstname, lastname FROM examinee WHERE email = '$email'";
			$result = mysql_query($query);
			$row = mysql_fetch_array($result);
			return $row;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
	}

	public static function recordScore($score, $email){
		try{
			$query = "UPDATE `examinee` SET `score` = '$score' WHERE email = '$email'";
			$result = mysql_query($query);
			return $result;
		}catch (Exeption $e) {
			error_log(getMessage($e));
		}
			return false;
	}
}

