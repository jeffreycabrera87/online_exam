<?php 

class adminUserHandler{

	public static function viewUsers(){
		$viewUsers = adminUserDAO::viewUsers();
		if(empty($viewUsers)){
			return false;
		}else{
			return $viewUsers;	
		}
	}

	public static function viewUsersById($id){
		if(empty($id)){
			return false;
		}

		$viewUsersById = adminUserDAO::viewUsersById($id);

		if(empty($viewUsersById)){
			return false;
		}else{
			return $viewUsersById;
		}
	}

	public static function deleteUser($id){
		if(empty($id)){
			return false;
		}

		$deleteUser = adminUserDAO::deleteUser($id);

		if(empty($deleteUser)){
			return false;
		}else{
			return $deleteUser;
		}
	}

	public static function editUser($firstname, $lastname, $email, $password, $score, $id){
		if(empty($firstname)){
			return false;
		}
		if(empty($lastname)){
			return false;
		}
		if(empty($email)){
			return false;
		}
		if(empty($password)){
			return false;
		}
	
		if(empty($id)){
			return false;
		}
		
		$editUser = adminUserDAO::editUser($firstname, $lastname, $email, $password, $score, $id);
		if(empty($editUser)){
			return false;
		} else{
			return $editUser;	
		}
	}

	public static function addUser($firstname, $lastname, $email, $password){
		if(empty($firstname)){
			return false;
		}
		if(empty($lastname)){
			return false;
		}
		if(empty($email)){
			return false;
		}
		if(empty($password)){
			return false;
		}
	
		$addUser = adminUserDAO::addUser($firstname, $lastname, $email, $password);
		if(empty($addUser)){
			return false;
		}else{
			return $addUser;
		}
	}

}

 ?>