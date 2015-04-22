<?php
if(!isset($_REQUEST['cmd'])){
	echo '{"result":0,message:"unknown command"}';
	exit();
}
$cmd=$_REQUEST['cmd'];
switch($cmd)
{
	case 1:
		getManufacturers();	
		break;
	case 2:
		getItems();
		break;
	case 3:
		//edit
		break;
	case 4:
		search_product();
		break;
	case 5:
	getManufacturerProducts();
	break;
	
	default:
		echo '{"result":0,message:"unknown command"}';
		break;
}
function getManufacturers(){
	include_once("pages/manufacturer.php");
    $obj=new manufacturer();
	$obj->view_manufacturer();

	if(!$obj->view_manufacturer()){
		//return error
		echo '{"result":0,"message": "No manufacturers."}';
		return;
	}

	//at this point the search has been successful. 
	//generate the JSON message to echo to the browser
	$row=$obj->fetch();
	echo '{"result":1,"manufacturer":[';	//start of json object
	while($row){
		echo json_encode($row);			//convert the result array to json object
		$row=$obj->fetch();
		if($row){
			echo ",";					//if there are more rows, add comma 
		}
	}
	echo "]}";

}

function getItems(){
	include_once("pages/item.php");
    $obj=new items();
	$obj->view_items();

	if(!$obj->view_items()){
		//return error
		echo '{"result":0,"message": "No manufacturers."}';
		return;
	}

	//at this point the search has been successful. 
	//generate the JSON message to echo to the browser
	$row=$obj->fetch();
	echo '{"result":1,"item":[';	//start of json object
	while($row){
		echo json_encode($row);			//convert the result array to json object
		$row=$obj->fetch();
		if($row){
			echo ",";					//if there are more rows, add comma 
		}
	}
	echo "]}";

}



function delete_product(){
	include("products.php");
	$obj=new products();
	$id=$_REQUEST['id'];
	if($obj->delete($id)){
		echo '{"result":1,"message": "deleted"}';
	}else{
		echo '{"result":0,"message": "product not removed."}';
	}
	break;
}	

function search_product(){
	if(!isset($_REQUEST['st'])){
		//return error
		echo '{"result":0,"message": "search did not work."}';
	}
	$search_text=$_REQUEST['st'];
	include("products.php");
	$obj=new products();
	if(!$obj->search_by_name($search_text)){
		//return error
		echo '{"result":0,"message": "search did not work."}';
		return;
	}
	//at this point the search has been successful. 
	//generate the JSON message to echo to the browser
	$row=$obj->fetch();
	echo '{"result":1,"products":[';	//start of json object
	while($row){
		echo json_encode($row);			//convert the result array to json object
		$row=$obj->fetch();
		if($row){
			echo ",";					//if there are more rows, add comma 
		}
	}
	echo "]}";							//end of json array and object
}
?>