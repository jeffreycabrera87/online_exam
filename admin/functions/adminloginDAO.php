<?php 
include_once('config.php');
class adminloginDAO{

	public static function verifyLogin($username, $password){
		global $db;
		try{
			$sql = "SELECT id FROM admin where username = '$username' AND password = '$password'";	
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
