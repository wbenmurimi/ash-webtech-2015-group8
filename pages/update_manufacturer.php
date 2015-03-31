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
               <li class='last'><a ><span>Manufacturer</span></a>
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
                        	  <?php
								if (isset($_REQUEST['id'])) {
									$no=$_REQUEST['id'];
                  include_once("manufacturer.php");
                   $obj=new manufacturer();

                  $obj->view_one_manufacturer($no);

							while ($row= $obj->fetch()) {
								$man_no=$row['manufacturer_id'];
								$name=$row['manufacturer_name'];
                $code=$row['code_no'];
								
							}
							}
								?>
									<form action ="updated_manufacturer.php"method="POST" >
								<div>Manufacturer number:</br>
									<input type= "text" name="man_no" size="30" value= <?php echo $man_no;?>></div>
								<div>Manufacturer name:</br>
									<input type= "text" name="man_name" size="30" value= <?php echo $name;?>></div>
                <div>Manufacturer code:</br>
                  <input type= "text" name="man_code" size="30" value= <?php echo $code;?>></div>
									
									<div><button name="btn">Save changes</button></div>
								</form>
                        </div>
                    </td>
                </tr>
            </table> 
        </div>
        
    </body>
</html>	
	
	