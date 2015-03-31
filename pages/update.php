<?php
require("check.php");
?>
<html>
    <head>
        <title>Update</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/styles.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <script>
            function validate() {
                var obj = document.getElementById("x");
                var str = obj.value;
                if (str.length <= 0) {
                    obj.style.backgroundColor("red");
                    return false;
                }
                // ;
                else{
                    obj.style.backgroundColor("green");
                    return false;
                }
                // ;

            }

        </script>
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
        
        <style type="text/css">

        </style>
    </head>
    <body>
        <div id= "container">
            <table border="1">
                    <!-- <tr> -->
                <tr colspan="2" id="pageheader">
                    <td>
                        <span id="img_position"></span><img src="../images/logo.jpg"></td>
                    <td id="header_text">
                        <h2>Ashesi Inventory</h2>
                    </td>
                </tr>
                <!-- </tr> -->
                <tr>
                    <td id="mainnav">
          <div id='cssmenu'>
            <ul>
               <li><a href='../index.php'><span>Home</span></a></li>
               <li class='active has-sub'><a><span>Inventory</span></a>
                  <ul>
                     <li class=''><a href='page_2.php'><span>Add</span></a>
                     </li>
                     <li class=''><a href='page_3.php'><span>View</span></a>
                     </li>
                  </ul>
               </li>
               <li class='has-sub'><a><span>Lecturer</span></a>
                <ul>
                    <li><a href='pages/page_4.php'><span>Add</span></a></li>
                    <li class='last'><a href='pages/page_5.php'><span>View</span></a></li>
                </ul>
                   </li>
               <li class='last'><a href='#'><span>Manufacturer</span></a>
                <ul>
                    <li><a href='#page6'><span>Add</span></a></li>
                    <li class='last'><a href='#page7'><span>View</span></a></li>
                </ul>
               </li>
            </ul>
</div>
                    </td>
                    <td id="content">

                        <div id= "my_search">
                            <input type="text" id="txtSearch" placeholder="Search" />
                            <span class="menuitem"><button>search</button></span>
                        </div>

                        <div id="divContent">
                        	  <?php
								if (isset($_REQUEST['id'])) {
									include_once("item.php");
								
									$obj=new items();
									$obj->view_item();

							while ($row= $obj->fetch()) {
								$item_no=$row['item_number'];
								$barcode=$row['barcode_number'];
								$name=$row['item_name'];
								$manufacturer=$row['manufacturer'];
								$price=$row['price'];
								$date_bought=$row['date_bought'];
								$repair_date=$row['last_repair_date'];
								$condiction=$row['conditions'];
								$location=$row['location'];
								$department=$row['department'];
								
							}
							}
								?>
									<form action ="updated.php"method="POST" >
								<div>Item number:</br>
									<input type= "text" name="item_no" size="30" value= <?php echo $item_no;?>></div>
								<div>barcode number:</br>
									<input type= "text" name="barcode_no" size="30" value= <?php echo $barcode;?>></div>
								<div>Item name:</br>
									<input type= "text" name="item_name" size="30" value= <?php echo $name;?>></div>
									<div>Manufacturer:</div>
									<div>
										<select name="manu">
											<option><?php echo $manufacturer;?></option>
											<option value="0" >---select manufacturer</option>
											<option value="Sonny" >Sonny</option>
											<option value="Samsung" >Samsung</option>
											<option value="Lenovo" >Lenovo</option>
											<option value="HP" >HP</option>
										</select>
									</div>
									<div>Price:</br>
										<input type= "text" name="price" size="30" value=<?php echo $price;?>></div>
									<div>Date bought:</br>
										<input id="datepicker" name="date_b" size="30" value= <?php echo $date_bought;?>></div>
									<div>Last repair date:</br>
										<input id="datepicker2" name="repair_d" size="30" value= <?php echo $repair_date;?>></div>
									<div>Condition:</br>
										<input type= "text" name="condiction" size="30" value=<?php echo $condiction;?>></div>
									<div>Location:</br>
										<input type= "text" name="location" size="30" value=<?php echo $location;?>></div>
									<div>Department:</br>
										<input type= "text" name="dpt" size="30" value=<?php echo $department;?>></div>
									</br>
									<div><button name="btn">Save</button></div>
								</form>
                        </div>
                    </td>
                </tr>
            </table> 
        </div>
        
    </body>
</html>	
	
	