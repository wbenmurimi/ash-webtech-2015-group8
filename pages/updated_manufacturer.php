<?php
		
	include_once("manufacturer.php");
    $obj=new manufacturer();
	$no=$_REQUEST['manu_id'];
	$name=$_REQUEST['manu_name'];
	$code=$_REQUEST['manu_code'];
	$obj->update_manufacturer($no,$name,$code);

	header("location:../view_manufacturer.php");
	
?>