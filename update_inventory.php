<?php
require("pages/check.php");
?>
<?php

?>
<html>
<head>
  <title>Update Inventory</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styles.css">
  <!--link rel="stylesheet" href="css/style_nav.css"-->
  <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../ash-webtech-2015-group8/Semantic-UI-1.8.1/dist/semantic.min.css">
  <link rel="stylesheet" href="../ash-webtech-2015-group8/Semantic-UI-1.8.1/dist/semantic.min.js">
  <link rel="stylesheet" href="../ash-webtech-2015-group8/Semantic-UI-1.8.1/dist/semantic.css">
  <link rel="stylesheet" href="../ash-webtech-2015-group8/Semantic-UI-1.8.1/dist/semantic.js">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script src="jquery-2.1.3.js"></script>
  <script>

$(document).ready(function() {
     $("#datepicker").datepicker({
         format: 'yyyy-mm-dd'
     });
 })
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

    <body style="background-color: #771212" >
     <div id="mainContainer">
      <div id= "topHeader">
        <img src="images/logo.jpg" style= "padding:10px; float:left; position:absolute">
        
        <div id="ashesi"><h1>Ashesi University Inventory Management Systems</h1></div>
        <div id="logout">
            <a href="pages/logout.php"><button id= "lbtn" >LOGOUT</button></a>
          </div>
      </div>

      <div id="topBar" class="ui small icon input" style="width: 1028px">
       <div style="padding-left:25px; padding-top:20px" class="ui huge breadcrumb">
         <a class="section">Home</a>
         <i class="right chevron icon divider"></i>
         <a class="section">Inventory</a>
         <i class="right chevron icon divider"></i>
         <div class="active section">Add</div>
       </div>
       <input style="width:300px; float:right" type="text" placeholder="Search inventory...">
       <i class="search icon"></i>
     </div>

     <div id="statusBar"></div>
     <div id="sideBar">
       <div id="mainnav">
        <div id='cssmenu'>
          <ul>
           <li><a href='index.php'><span class="fa fa-home">&nbsp&nbspHome</span></a></li>
           <li class='active has-sub'><a><span class="fa fa-bars">&nbsp&nbspInventory</span></a>
            <ul>
             <li class=''><a href="manuForm.php"><span >Add</span></a>
             </li>
             <li class=''><a href="view_inventory.php"><span >View</span></a></li>
             <!-- </li> -->
           </ul>
         </li>
         <li class='has-sub'><a><span class="fa fa-users">&nbsp&nbspLecture Halls</span></a>
          <ul>
            <li><a href='addLectureHall.php'><span>Add</span></a></li>
            <li class='last'><a href='viewLectureHall.php'><span>View</span></a></li>
          </ul>
        </li>
        <li class='has-sub'><a><span class="fa fa-wrench">&nbsp&nbspManufacturers</span></a>
          <ul>
            <li><a href='addManu.php'><span>Add</span></a></li>
            <li class='last'><a href='view_manufacturer.php'><span>View</span></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<div id="infoBar">
  <?php
      if (isset($_REQUEST['id'])) {
        include_once("pages/item.php");
      
        $obj=new items();
        $obj->view_item();

    while ($row= $obj->fetch()) {
      $item_no=$row['item_number'];
      $barcode=$row['barcode_number'];
      $name=$row['item_name'];
      $manufacturer=$row['manufacturer'];
      $price=$row['price'];
      $date_boughtt=$row['date_bought'];
      $repair_date=$row['last_repair_date'];
      $condiction=$row['conditions'];
      $location=$row['location'];
      $department=$row['department'];
      
    }
    }
      ?>
  <form class="ui form" action="pages/updated.php" method="POST">
    <h2 class="ui dividing header"> Inventory Information Form </h2>
    <div class="field"> 
      <label> Item Number </label> <input style="width:100%; float:left" 
      type="text" name="item-code" placeholder="Enter item code here"value= <?php echo $item_no;?>>
    </div>
    <div class="field"> 
      <label> Barcode Number </label> <input style="width:100%; float:left"
       type="text" name="bar-code" placeholder="Enter barcode here"value= <?php echo $barcode;?>>
    </div>
    
    <div class="two fields">
 
      <div class="field">
        <label> Date Bought </label>
        <input style="width:100%" 
        type="text" name="date-bought" placeholder="Enter date bought Here"value=<?php echo $date_boughtt;?>>
      </div>
      <div class="field"> 
        <label> Last Repair Date </label>
        <input  style="width:100%; float:left" type="text" 
        name="repair-date" placeholder="Enter repair date here"value=<?php echo $repair_date;?>>
    </div>
    </div>
   <div class="two fields">
    <div class="field"> 
        <label>Price</label>
        <input style="width:100%" float="left" type="text" 
        name="price" placeholder="Enter price here"value= <?php echo $price;?>>
      </div>
    <div class="field">
      <label> Location </label>
      <input style="width:100%" type="text" 
      name="location" placeholder="Enter location here"value=<?php echo $location;?>>
    </div>
  </div>
  <div class="two fields">
    <div class="field"> 
      <label> Item Name </label>
      <input style="width:100%; float:left"type="text" name="item-nm" placeholder="Enter item name here"value=<?php echo $name;?>>
    </div>
    <div class="field"> 
        <label> Manufacturer Name </label>
        <select style="width:100%" type="text" name="manu-nm" >
          <option><?php echo $manufacturer;?></option>
          <option value="0" > --select manufacturer-- </option>
          <option value="Sonny" >Sonny</option>
          <option value="Samsung" >Samsung</option>
          <option value="Lenovo" >Lenovo</option>
          <option value="HP" >HP</option>
        </select>
      </div>
    </div>
  <div class="two fields">
    <div class="field">
      <label> Department </label>
      <select name="department"style="width:100%; float:left" >
        <option><?php echo $department;?></option>
        <option  value=""> --Department-- </option>
        <option value="1">CS</option>
        <option value="2">MIS</option>
        <option value="3">BA</option>
        <option value="4">EEE</option>
        <option value="4">ME</option>
        <option value="4">CE</option>
      </select>
    </div> 
    <div class="field">
      <label> Condition </label>
      <select name="condition"style="width:100%; float:left" >
         <option><?php echo $condiction;?></option>
        <option value=""> --Condition-- </option>
        <option value="excellent">Excellent</option>
        <option value="good">Good</option>
        <option value="fair">Fair</option>
        <option value="poor">Poor</option>
      </select>
    </div> 
  </div>               
    <div class="field">
      <input type="submit" class="ui secondary button" value="UPDATE">

    </div> 

  </div>

   

</form>

</div>
</div>
</body>

</html>