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
		search_inventory();
		break;
	case 4:
		search_manufacturer();
		break;
	case 5:
		search_halls();
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
function search_inventory(){

	include_once("pages/item.php");
    $obj=new items();
    $id=$_REQUEST['id'];
	$obj->search_all_inventory($id);

	if(!$obj->search_all_inventory($id)){
		//return error
		echo '{"result":0,"message": "No match results."}';
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

function search_manufacturer(){

	include_once("pages/manufacturer.php");
    $obj=new manufacturer();
    $id=$_REQUEST['id'];
	$obj->search_all_manufacturer($id);

	if(!$obj->search_all_manufacturer($id)){
		//return error
		echo '{"result":0,"message": "No match results."}';
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

function search_halls(){

	include_once("pages/lectureHalls.php");
    $obj=new lectureHalls();
    $id=$_REQUEST['id'];
	$obj->search_lecture_halls($id);

	if(!$obj->search_lecture_halls($id)){
		//return error
		echo '{"result":0,"message": "No match results."}';
		return;
	}

	//at this point the search has been successful. 
	//generate the JSON message to echo to the browser
	$row=$obj->fetch();
	echo '{"result":1,"halls":[';	//start of json object
	while($row){
		echo json_encode($row);			//convert the result array to json object
		$row=$obj->fetch();
		if($row){
			echo ",";					//if there are more rows, add comma 
		}
	}
	echo "]}";

}



?>