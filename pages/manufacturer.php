<?php 
include_once ("adb.php");
class manufacturer extends adb {
	//function manufacturer(){}
	
	function add_manufacturer($id, $name,$code){
	$str_query = "INSERT into manufacturer set 
					manufacturer_id='$id', manufacturer_name = '$name',code_no='$code'";
	return $this->query($str_query);
	
	}
	function update_manufacturer($id,$name,$code){
	
	$str_query = "UPDATE  manufacturer set manufacturer_name = '$name',
	code_no='$code' where manufacturer_id = $id";

		
		return $this->query($str_query);
	}
	
	function delete_manufacturer($id) {
	
	$str_query = " DELETE from manufacturer where manufacturer_id = $id";
	return $this->query($str_query);
}
	
	function view_manufacturer() {
	$str_query = "SELECT * FROM manufacturer";
	return $this->query($str_query);
	}
	function view_one_manufacturer($id) {
	$str_query = "SELECT * FROM manufacturer WHERE manufacturer_id='$id'";
	return $this->query($str_query);
	}
	}

?>	