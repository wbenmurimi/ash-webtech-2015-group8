<?php
require("check.php");
?>
<?php
if (isset($_REQUEST['id'])) {
  $no=$_REQUEST['id'];;
	include_once("manufacturer.php");
    $obj=new manufacturer();
	$obj->delete_manufacturer($no);
	header("location:view_manufacturer.php");
	
}
?>