<?php
require("pages/check.php");
?>
<?php

?>
<html>
<head>
  <title>Home</title>
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

function sendRequest(u){
        // Send request to server
        //u a url as a string
        //async is type of request
        var obj=$.ajax({url:u,async:false});
        //Convert the JSON string to object
        var result=$.parseJSON(obj.responseText);
        return result;  //return object
        
      }
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
function searchInventory(){
      
  var txtSearch=document.getElementById("searchInput").value;
  var myUrl= "control.php?cmd=3&id="+txtSearch;//url
  result=sendRequest(myUrl);//sending the requert

  if(result.result==0){//if there are no products with the specified manufacturer id
    $("#divStatus").text(result.message);
    return;
  }
  else if(result.result==1){

  itemsTable=document.getElementById("itemsTable");
  tableContent=document.getElementById("tableContent");

  rowNum=itemsTable.rows.length;
  for(i=rowNum;i>1;i--){
    itemsTable.deleteRow(i-1);
  }
                
  for (i = 0; i < result.item.length; i++){ 

      rowNum=itemsTable.rows.length;
    var row=itemsTable.insertRow(rowNum);

    var itemId=row.insertCell(0);
    var barcodeNumber=row.insertCell(1);
    var itemName=row.insertCell(2);
    var manufacturer=row.insertCell(3);
    var price=row.insertCell(4);
    var date_bought=row.insertCell(5);
    var last_repair_date=row.insertCell(6);
    var conditions=row.insertCell(7);
    var location=row.insertCell(7);
    var department=row.insertCell(7);

    row.id="row"+i;
    row.name="row"+i;
    if(i%2==0){
      $("#row"+i).css("backgroundColor","#8AD9FF");

    }
    itemId.innerHTML=result.item[i].item_number;
    barcodeNumber.innerHTML=result.item[i].barcode_number;
    itemName.innerHTML=result.item[i].item_name;
    manufacturer.innerHTML=result.item[i].manufacturer;
    price.innerHTML=result.item[i].price;
    date_bought.innerHTML=result.item[i].date_bought;
    last_repair_date.innerHTML=result.item[i].last_repair_date;
    conditions.innerHTML=result.item[i].conditions;
    location.innerHTML=result.item[i].location;
    department.innerHTML=result.item[i].department;
    }
}

}

      </script>

      <style type="text/css">
      #searchBtn{
        width: 3em;
        height: 1.8em;
        /*background-color: #EFDBCE;*/
        background-color: #8D1919;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius:6px;
        color: #FFF;
        font-family: 'Oswald';
        font-size: 18px;
        text-decoration: none;
        cursor: pointer;
        border:none;
        margin-right: 30px;
        margin-top: 8px;
        
      }
      #searchInput{
        margin-top: 8px;
        margin-right: 10px;
      }
      #itemsTable{
      }

      </style>

    </head>

    <body style="background-color: #771212" >
     <div id="mainContainer">
      <div id= "topHeader">
        <img src="images/logo.jpg" style= "padding:10px; float:left; position:absolute">
        <div id="ashesi"><h1>Ashesi University Inventory Management Systems</h1></div>
        <div id="logout">
            <a href="pages/logout.php"><button id= "lbtn">LOGOUT</button></a>
          </div>
      </div>

      <div id="topBar" class="ui small icon input" style="width: 1028px">
       <div style="padding-left:25px; padding-top:20px" class="ui huge breadcrumb">
         
         <i class="right chevron icon divider"></i>
         <div class="active section">Home</div>
       </div>
       <button id="searchBtn" style="width:60px;float:right "name="searchBtn" onClick="searchInventory()">Search</button>
       
         <input id="searchInput" style="width:300px;float:right " type="text" placeholder="Search inventory...">
         <!-- <i class="search icon"></i> -->
         
         
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
             <li class=''><a href="view_inventory.php"><span>View</span></a></li>
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
  <h2 class="ui dividing header"> Inventory Information </h2>

  <?php
  
  include_once("pages/item.php");
  $obj= new items();
  $obj->view_items();

  echo '<table id="itemsTable" border=1 align= "center" width="100%">';
  $style="";
  $count=0;
  echo "<tr style='background-color:grey;color:white; text-align:center'>
  <td>Item number</td><td>barcode</td><td>name</td><td>manufacturer</td><td> Price</td>
  <td>date bought</td><td>repair date</td><td>condition</td><td>location</td><td>department</td></tr>";
  while ($row= $obj->fetch()) {
    if($count%2==0){
      $style="style='background-color: #C2FFFF'"; 
    }
    else{
      $style="";
    }
    $count+=1;
    echo "<tr $style>";
    echo "<td>{$row["item_number"]}</td>";
    echo "<td>{$row["barcode_number"]}</td>";
    echo "<td>{$row["item_name"]}</td>";
    echo "<td>{$row["manufacturer"]}</td>";
    echo "<td>{$row["price"]}</td>";
    echo "<td>{$row["date_bought"]}</td>";
    echo "<td>{$row["last_repair_date"]}</td>";
    echo "<td>{$row["conditions"]}</td>";
    echo "<td>{$row["location"]}</td>";
    echo "<td>{$row["department"]}</td>";
    echo"</tr>";
  }
  echo "</table></br></br>";
  ?>
</div>
</div>
</body>
</html>