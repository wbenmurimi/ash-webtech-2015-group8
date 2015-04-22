<?php
session_start();
$user=$_SESSION['username']; 
if(!$_SESSION["username"]){
// if (!$user) {
 
header("location:pages/login.php");
}
else{

// echo "welcome ".$user;  
}

?>