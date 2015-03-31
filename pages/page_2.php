<?php
require("check.php");
?>
<html>
    <head>
        <title>Add item</title>
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
        #divContent{
          margin-left: 150px;
        }
        form button {
        background-color: #8D1919;
        border: 1px solid rgba(0,0,0,.1);
        color: rgb(255,255,255);
        font-family: 'Varela Round', sans-serif;
        font-size: .85em;
        padding: .55em .9em;
        border-radius: 5px;
        transition: all 400ms ease; 
      }
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
                    <li><a href='add_hall.php'><span>Add</span></a></li>
                    <li class='last'><a href='view_hall.php'><span>View</span></a></li>
                </ul>
                   </li>
               <li class='has-sub'><a><span>Manufacturer</span></a>
                <ul>
                    <li><a href='add_manufacturer.php'><span>Add</span></a></li>
                    <li class='last'><a href='view_manufacturer.php'><span>View</span></a></li>
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
                        	  <form action ="page_2.php"method="POST" >
            								<div>Item number:</br>
            									<input type= "text" name="item_no" size="40"></div>
            								<div>barcode number:</br>
            									<input type= "text" name="barcode_no" size="40"></div>
            								<div>Item name:</br>
            									<input type= "text" name="item_name" size="40"></div>
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
            										<input type= "text" name="price" size="40"></div>
            									<div>Date bought:</br>
            										<input id="datepicker" name="date_b" size="40"></div>
            									<div>Last repair date:</br>
            										<input id="datepicker2" name="repair_d" size="40"></div>
            									<div>Condition:</br>
            										<input type= "text" name="condiction" size="40"></div>
            									<div>Location:</br>
            										<input type= "text" name="location" size="40"></div>
            									<div>Department:</br>
            										<input type= "text" name="dpt" size="40"></div>
            									</br>
            									<div><button name="btn">Save</button></div>
            								</form>
            								<?php
            								
            									include_once("item.php");
            									$obj=new items();

            									$obj->add_items();
            									// header("location:../index.php");
            									
            								
            								?>    
                                    </div>
                    </td>
                </tr>
            </table> 
        </div>
        
    </body>
</html>	
	
	