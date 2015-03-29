
<?php
    include_once ("adb.php");
	class lectureHalls extends adb{
	function newLecHall (){
			}

	function addNewLec($number, $name){

		$str_query2="INSERT INTO lecture_halls (hall_number, hall_name )
							VALUES ('$number','$name')";
													
		return $this->query($str_query2);
	}

	function view_halls(){
		$querry="SELECT * FROM lecture_halls";
		return $this->query($querry);
	}


   function deleteLecHall ($number){
		$str_query = "DELETE FROM lecture_halls WHERE hall_number  = '$number' " ;
		
		return $this->query($str_query);	
		
		}	
	
	function updateLecHall($number, $newName){
		$str_query = " UPDATE lecture_halls set 
								hall_name = '$newName'
								WHERE hall_number = '$number'";
		return $this->query($str_query);
    
	}
	
	function view_one_hall($no){
			$querry="SELECT * FROM lecture_halls WHERE hall_number=$no";
			return $this->query($querry);
		}
		
	// function searchLecHalls (){
	// $str_query = " SELECT * FROM lecture_halls WHERE hall_name like '%$search_text%' "
	// $this->query($str_query);
	// $result = $this->fetch();
	// $count = $this->get_num_rows();
	// for ($i=0; $i<$count; i++ ){
	// 	echo "<tr><td>{$row ['hall_name']}</td><td> {$row['hall_number']} </td></tr>";
	// 	echo "<br>";
	// }
	// }
}
	
	?>