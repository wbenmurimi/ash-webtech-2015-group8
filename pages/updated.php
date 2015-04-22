<?php

	include("item.php");
	$obj= new items();
	$obj->update_item();

	header("location:../view_inventory.php");
?>