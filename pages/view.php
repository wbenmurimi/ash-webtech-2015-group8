<?php
	
	include_once("item.php");
	$obj= new items();
	$obj->view_items();

	echo '<table border=1 align= "center" width="80%">';
	$style="";
	$count=0;
	echo "<tr style='background-color:blue;color:white; text-align:center'>
		<td>Item number</td><td>barcode</td><td>name</td><td>manufacturer</td><td> Price</td>
		<td>date bought</td><td>repair date</td><td>condition</td><td>location</td><td>department</td><td>Edit</td><td>Delete</td></tr>";
	while ($row= $obj->fetch()) {
		if($count%2==0){
		$style="style='background-color: #C2FFFF'";	
		}
		else{
			$style="";
		}
		$count+=1;
		echo "<tr $style>";
		echo "<td>{$row["item_number"]}</td>";
		echo "<td>{$row["barcode_number"]}</td>";
		echo "<td>{$row["item_name"]}</td>";
		echo "<td>{$row["manufacturer"]}</td>";
		echo "<td>{$row["price"]}</td>";
		echo "<td>{$row["date_bought"]}</td>";
		echo "<td>{$row["last_repair_date"]}</td>";
		echo "<td>{$row["conditions"]}</td>";
		echo "<td>{$row["location"]}</td>";
		echo "<td>{$row["department"]}</td>";
		echo "<td><a href='update.php?id={$row["item_number"]}'>edit</a></td>";
		echo "<td><a href='delete.php?id={$row["item_number"]}'>delete</a></td>";
		echo"</tr>";
	}
	echo "</table></br></br>";
	echo "<a href='index.html'><h2>Home</h2></a>;";
	?>