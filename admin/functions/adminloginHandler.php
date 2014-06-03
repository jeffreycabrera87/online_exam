<?php 

class adminloginHandler{

	public function verifyLogin($username, $password){
		if(empty($username)){
			return false;
		}
		if(empty($password)){
			return false;
		}

		$verifyLogin = adminloginDAO::verifyLogin($username, $password);

		if(empty($verifyLogin)){
			return false;
		} return $verifyLogin;
	}
}

 ?>