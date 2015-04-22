<?php
require("pages/check.php");
?>
<?php
?>
<html>
<head>
  <title>View Lecture Hall</title>
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
    
    function edits(){
      alert("jj");
    }
    function getHalls(){      
      var txtSearch=document.getElementById("searchInput").value;
  var myUrl= "control.php?cmd=5&id="+txtSearch;//url
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
    
    
    for (i = 0; i < result.halls.length; i++){ 

      rowNum=itemsTable.rows.length;
      var row=itemsTable.insertRow(rowNum);

      var hallId=row.insertCell(0);
      var hallName=row.insertCell(1);
      var edit=row.insertCell(2);
      var deleteL=row.insertCell(3);
      

      row.id="row"+i;
      row.name="row"+i;
      if(i%2==0){
        $("#row"+i).css("backgroundColor","#8AD9FF");

      }

      hallId.innerHTML=result.halls[i].hall_number;
      hallName.innerHTML=result.halls[i].hall_name;
      
    }
  }

}

</script>

<style type="text/css">
#php_button{
  width: 5em;
  height: 1em;
  background-color: grey;
  -moz-border-radius: 5px;
  -webkit-border-radius: px;
  border-radius:4px;
  color: #FFF;
  font-family: 'Oswald';
  font-size: 18px;
  text-decoration: none;
  cursor: pointer;
  border:none;  
}
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
     <a class="section">Lecture Hall</a>
     <i class="right chevron icon divider"></i>
     <div class="active section">View</div>
   </div>
   <button id="searchBtn" style="width:60px;float:right "name="searchBtn" onClick="getHalls()">Search</button>
   
   <input id="searchInput" style="width:300px;float:right " type="text" placeholder="Search inventory...">
   
 </div>

 <div id="statusBar"></div>
 <div id="sideBar">
   <div id="mainnav">
    <div id='cssmenu'>
      <ul>
       <li><a href='index.php'><span class="fa fa-home">&nbsp&nbspHome</span></a></li>
       <li class='active has-sub'><a><span class="fa fa-bars">&nbsp&nbspInventory</span></a>
        <ul>
         <li class=''><a href='manuForm.php'><span>Add</span></a>
         </li>
         <li class=''><a href="view_inventory.php"><span>View</span></a>
         </li>
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
  <h2 class="ui dividing header"> Lecture Hall Details </h2>
  <?php
  include_once("pages/lectureHalls.php");
  $obj2=new lectureHalls();

  $obj2->view_halls();

  echo '<table border=1 id="itemsTable" align= "center" width="100%">';
  $style="";
  $count=0;
  echo "<tr style='background-color:grey;color:white; text-align:center'>
  <td>Hall number</td><td> HallName</td><td></td><td></td></tr>";
  while ($row= $obj2->fetch()) {
    if($count%2==0){
      $style="style='background-color: #C2FFFF'"; 
    }
    else{
      $style="";
    }
    $count+=1;
    $buttonE = "<input type='button' id='php_button' value='Edit' onClick='edit_booking({$row['hall_number']})'>";
    $buttonD = "<input type='button' id='php_button' value='Delete'>";
    echo "<tr $style>";
    echo "<td>{$row["hall_number"]}</td>";
    echo "<td>{$row["hall_name"]}</td>";
    echo "<td><a href='update_lecture_hall.php?id={$row["hall_number"]}' style='text-decoration: none;' > $buttonE</a> </td>";
    echo "<td><a href='pages/delete_hall.php?id={$row["hall_number"]}' style='text-decoration: none;' > $buttonD</a> </td>";
    echo"</tr>";
  }
  echo "</table></br></br>";
  ?>
</div>
</div>
</body>
</html>

