
<?php
		
		include("item.php");
		$obj= new items();
		$obj->update_item();

		header("location:page_3.php");
	
		?>