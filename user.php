<?php
Include_once("adb.php");
Class users extends adb{
	function add_user($id, $name, $email, $pass, $phone){
		// date borrowed?
		// phone number?
		$str_query="insert into users set user_id=$id, user_name='$name', email='$email', password='$pass', phone='$phone'";
		return $this->query($str_query);
	}
	function view_user($id){
		$str_query="select * from users where user_id=$id";
		if(!$this->query($str_query)){
			echo "error";
		}else{
			return $this->fetch();
		}
		return false;
	}

	function view_all(){
		$str_query="select * from users";
		if(!$this->query($str_query)){
			echo "error";
		}else{
			return true;
		}
		return false;
	}

	function update_user($id, $name, $email, $pass, $phone){
		$str_query="update users set user_name='$name', email='$email', password='$pass', phone='$phone' where user_id='$id'";
		return $this->query($str_query);	
	}

	function delete_user($id){
		$str_query="delete from users where user_id='$id'";
		return $this->query($str_query);	
	}

}
