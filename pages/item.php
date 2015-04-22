<?php
include_once("adb.php");
Class items extends adb{

	function items(){
		adb::adb();
	}
	function get_values(){
		 $item_no=$_REQUEST['item_no'];
		$barcode=$_REQUEST['barcode_no'];
		$name=$_REQUEST['item_name'];
		$manufacturer=$_REQUEST['manu'];
		$price=$_REQUEST['price'];
		$date_bought=$_REQUEST['date_b'];
		$repair_date=$_REQUEST['repair_d'];
		$condiction=$_REQUEST['condiction'];
		$location=$_REQUEST['location'];
		$department=$_REQUEST['dpt'];
	}
/*
	adds  item to the database
	*/
	function add_items(){
		if (isset($_REQUEST['item-code'])) {
		$item_no=$_REQUEST['item-code'];
		$barcode=$_REQUEST['bar-code'];
		$name=$_REQUEST['item-nm'];
		$manufacturer=$_REQUEST['manu-nm'];
		$price=$_REQUEST['price'];
		$date_bought=$_REQUEST['date-bought'];
		$repair_date=$_REQUEST['repair-date'];
		$condition=$_REQUEST['condition'];
		$location=$_REQUEST['location'];
		$department=$_REQUEST['department'];


		$querry="INSERT INTO `items` (`item_number`, `barcode_number`, 
			`item_name`, `manufacturer`, `price`, `date_bought`, `last_repair_date`,
			 `conditions`, `location`, `department`) 
			VALUES ('$item_no', '$barcode', '$name', '$manufacturer', '$price', '$date_bought', 
			'$repair_date', '$condition', '$location', '$department');";
		

		return $this->query($querry);
	}

	}
	/*
	views all items from the database
	*/
	function view_items(){
		$querry="SELECT * FROM items";
		return $this->query($querry);
	}
	/*
	views one item from the database
	*/
	function view_item(){
		$no=$_REQUEST['id'];
		$querry="SELECT * FROM items WHERE item_number=$no";
		return $this->query($querry);
	}
	/*
	deletes item from the database
	*/

	function delete_item(){
		$no=$_REQUEST['id'];
		$querry="DELETE FROM items WHERE item_number=$no";

		return $this->query($querry);
	}
	/*
	updates the items in the database
	*/
	function update_item(){;
		$item_no=$_REQUEST['item_no'];
		$barcode=$_REQUEST['barcode_no'];
		$name=$_REQUEST['item_name'];
		$manufacturer=$_REQUEST['manu'];
		$price=$_REQUEST['price'];
		$date_bought=$_REQUEST['date_b'];
		$repair_date=$_REQUEST['repair_d'];
		$condition=$_REQUEST['condiction'];
		$location=$_REQUEST['location'];
		$department=$_REQUEST['dpt'];

		$querry="UPDATE items 
		 		SET barcode_number='$barcode', item_name='$name', manufacturer='$manufacturer'
		 		, price='$price', date_bought='$date_bought', last_repair_date='$repair_date', conditions='$condition'
		 		,location='$location',department='$department'
		 		WHERE item_number=$item_no";
		 		echo "$location";

		 return $this->query($querry);
	}

}
