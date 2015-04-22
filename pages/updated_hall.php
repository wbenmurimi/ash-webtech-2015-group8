<?php
		
	include_once("lectureHalls.php");
	$obj=new lectureHalls();
	$no=$_REQUEST['hall_no'];
    $name=$_REQUEST['hall_name'];
	$obj->updateLecHall($no,$name);

	header("location:../viewLectureHall.php");
	
?>