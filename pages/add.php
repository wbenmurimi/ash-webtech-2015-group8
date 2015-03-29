<html>
	<head>
		<title>add item</title>
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
</script>
		<style type="text/css">
			body{
				text-align: center;
				background-color: #DFEAEA;
			}
		</style>
	<script>
  		$(document).ready(function() {
    		$("#datepicker").datepicker();
 		 });
    </script>
    <script>
  		$(document).ready(function() {
    		$("#datepicker2").datepicker();
 		 });
    </script>
	</head>
	<body>
		<form action ="add.php"method="POST" >
		<div>Item number:</br>
			<input type= "text" name="item_no" size="30"></div>
		<div>barcode number:</br>
			<input type= "text" name="barcode_no" size="30"></div>
		<div>Item name:</br>
			<input type= "text" name="item_name" size="30"></div>
			<div>Manufacturer:</div>
			<div>
				<select name="manu">
					<option value="0" >---select manufacturer</option>
					<option value="Sonny" >Sonny</option>
					<option value="Samsung" >Samsung</option>
					<option value="Lenovo" >Lenovo</option>
					<option value="HP" >HP</option>
				</select>
			</div>
			<div>Price:</br>
				<input type= "text" name="price" size="30"></div>
			<div>Date bought:</br>
				<input id="datepicker" name="date_b" size="30"></div>
			<div>Last repair date:</br>
				<input id="datepicker2" name="repair_d" size="30"></div>
			<div>Condition:</br>
				<input type= "text" name="condiction" size="30"></div>
			<div>Location:</br>
				<input type= "text" name="location" size="30"></div>
			<div>Department:</br>
				<input type= "text" name="dpt" size="30"></div>
			</br>
			<div><button name="btn">Save</button></div>
		</form>
		<a href='index.html'><h2>Home</h2></a>;
		<?php
			include_once("item.php");
			$obj=new items();


			$obj->add_items();
		?>
	</body>
</html>	