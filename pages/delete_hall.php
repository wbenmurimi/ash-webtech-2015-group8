<?php
if (isset($_REQUEST['id'])) {
  $no=$_REQUEST['id'];
	include_once("lectureHalls.php");
	$obj=new lectureHalls();

	$obj->deleteLecHall($no);
	header("location:view_hall.php");
	
}
?>