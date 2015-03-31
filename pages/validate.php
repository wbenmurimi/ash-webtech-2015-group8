<?php
session_start();
ob_start();
include_once("user.php");
 $obj=new users();
 $obj->login_user();
 $myusername=$_REQUEST['username']; 
$mypassword=$_REQUEST['password']; 
$row= $obj->fetch();
	if($row){		
		$_SESSION["username"]="$myusername";
		$_SESSION["password"]="$mypassword"; 
		echo "done";

		header("location:../index.php?username=$myusername");

		}
		else {
		$message=$_SESSION['error']='Invalid Username or Password';
		header("location:login.php?error=$message");
		}
		
// 	}

ob_end_flush();

?>