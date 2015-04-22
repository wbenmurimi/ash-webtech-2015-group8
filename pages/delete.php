
<?php
if (isset($_REQUEST['id'])) {
		
		include("item.php");
		$obj= new items();
		$obj->delete_item();	

		 header("location:../view_inventory.php");
	}
		?>