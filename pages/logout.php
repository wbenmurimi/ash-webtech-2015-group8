<?php 
	session_start();
	session_destroy();
	echo "Logged out succesfully";
	$message=$_SESSION['error']='Logged out succesfully';
	header("location:login.php?error=$message")
?>