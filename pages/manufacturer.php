<?php 
include_once ("adb.php");
class manufacturer extends adb {
	//function manufacturer(){}
	
	function add_manufacturer($id, $name){
	$str_query = "insert into table_manufacturer set 
					manufacturer_id='$id', manufacturer_name = '$name'";
	return $this->query($str_query);
	
	}
	function update_manufacturer($id,$name){
/*if (isset($_REQUEST['mn'])) {
		
	$manufacturer_id = $_REQUEST['mid'];
	$manufacturer_name = $_REQUEST['mn'];*/
	
	$str_query = "UPDATE  table_manufacturer set manufacturer_name = '$name', manufacturer_id = '$manufacturer_id' where manufacturer_id = $id";

		
		return $this->query($str_query);
	}
	
	function delete_manufacturer($id) {
	//$manufacturer_id = $_REQUEST['mid'];
	
	$str_query = " DELETE from table_manufacturer where manufacturer_id = $id";
}
	
	function view_manufacturer() {
	$str_query = "SELECT * FROM table_manufacturer";
	return $this->query($str_query);
	}
	}
$obj = new manufacturer();
$obj->add_manufacturer(1,"test name");
echo mysql_error();
$obj->update_manufactuer(1, "test name");
echo mysql_error();
$obj->delete_manufacturer(1);
ech mysql_error();
$obj->view_manufacturer();
echo mysql_error();
?>	