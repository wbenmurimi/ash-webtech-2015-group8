
<html>
    <head>
        <title>Add LH</title>
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
                    <li><a href='add_hall.php'><span>Add</span></a></li>
                    <li class='last'><a href='view_hall.php'><span>View</span></a></li>
                </ul>
                   </li>
               <li class='has-sub'><a href='#'><span>Manufacturer</span></a>
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
                        	  <form action ="add_hall.php"method="POST" >
								<div>Hall number:</br>
									<input type= "text" name="hall_no" size="30"></div>
								<div>Hall name:</br>
									<input type= "text" name="hall_name" size="30"></div>
									
									<div><button name="btn">Save</button></div>
								</form>
								<?php
								if (isset($_REQUEST['hall_no'])) {
                  $no=$_REQUEST['hall_no'];
                 
                  $name=$_REQUEST['hall_name'];
									include_once("lectureHalls.php");
									$obj=new lectureHalls();

									$obj->addNewLec($no,$name);
									
								}
								?>
                        </div>
                    </td>
                </tr>
            </table> 
        </div>
        
    </body>
</html>	
	
	