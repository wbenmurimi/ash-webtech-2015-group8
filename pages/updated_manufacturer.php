<?php
		
	include_once("manufacturer.php");
    $obj=new manufacturer();
	$no=$_REQUEST['man_no'];
	$name=$_REQUEST['man_name'];
	$code=$_REQUEST['man_code'];
	$obj->update_manufacturer($no,$name,$code);

	header("location:view_manufacturer.php");
	
?>