<?php
require("check.php");
?>
<html>
    <head>
        <title>Index</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/styles.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
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
                    <li class='last'><a href='page_5.php'><span>View</span></a></li>
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
                        	<?php
                        	include_once("manufacturer.php");
                            $obj2=new manufacturer();

                            $obj2->view_manufacturer();

							echo '<table border=1 align= "center" width="100%">';
							$style="";
							$count=0;
							echo "<tr style='background-color:blue;color:white; text-align:center'>
								<td>Manufacturer Number</td><td> Manufacturer Name</td><td> Manufacturer Code</td><td>Edit</td><td>Delete</td></tr>";
							while ($row= $obj2->fetch()) {
								if($count%2==0){
								$style="style='background-color: #C2FFFF'";	
								}
								else{
									$style="";
								}
								$count+=1;
								echo "<tr $style>";
								echo "<td>{$row["manufacturer_id"]}</td>";
								echo "<td>{$row["manufacturer_name"]}</td>";
								echo "<td>{$row["code_no"]}</td>";
								echo "<td><a href='update_manufacturer.php?id={$row["manufacturer_id"]}'>Edit</a></td>";
								echo "<td><a href='delete_manufacturer.php?id={$row["manufacturer_id"]}'>Delete</a></td>";
								echo"</tr>";
							}
							echo "</table></br></br>";
							?>
						                            
                        </div>
                    </td>
                </tr>
            </table> 
        </div>
        
    </body>
        </head>
</html>	
	
	