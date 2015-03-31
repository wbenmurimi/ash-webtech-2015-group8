<?php
Include_once("adb.php");
Class users extends adb{
	function add_user($name, $email, $pass){
		$str_query="INSERT into users set user_name='$name', email='$email', password='$pass'";
		return $this->query($str_query);
	}
	function view_user($id){
		$str_query="SELECT * from users where user_id=$id";
		if(!$this->query($str_query)){
			echo "error";
		}else{
			return $this->fetch();
		}
		return false;
	}

	function view_all(){
		$str_query="SELECT * from users";
		if(!$this->query($str_query)){
			echo "error";
		}else{
			return true;
		}
		return false;
	}

	function update_user($id, $name, $email, $pass, $phone){
		$str_query="UPDATE users set user_name='$name', email='$email', password='$pass', phone='$phone' where user_id='$id'";
		return $this->query($str_query);	
	}

	function delete_user($id){
		$str_query="delete from users where user_id='$id'";
		return $this->query($str_query);	
	}
	function login_user(){

		$myusername=$_REQUEST['username']; 
		$mypassword=$_REQUEST['password']; 
		
		$str_query="SELECT * FROM users WHERE user_name='$myusername' and password='$mypassword'";

		return $this->query($str_query);
	}

}
