
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
			$querry="SELECT * FROM lecture_halls WHERE hall_number='$no'";
			return $this->query($querry);
		}

	function search_lecture_halls($txtSearch){
		
		$querry="SELECT * from lecture_halls where hall_number like '%$txtSearch%' or hall_name like '%$txtSearch%'";
	
		return $this->query($querry);
	}
}
	
	?>