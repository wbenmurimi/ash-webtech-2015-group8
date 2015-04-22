<?php
?>
<html>
  <head>
      <title>Add manufacturer</title>
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
    function getManufacturers(){
      alert("clicked");
      var myUrl= "control.php?cmd=1";//url
      result=sendRequest(myUrl);//sending the requert

      if(result.result==0){//if there are no products with the specified manufacturer id
        $("#divStatus").text(result.message);
        return;
      }
      else if(result.result==1){
        var viewArea= document.getElementById("infoBar");
        // $("#infoBar").css("backgroundColor","red");
        $("#infoBar").html("");
      

       var table = document.createElement('TABLE');
        table.border='2';
        
        var tableBody = document.createElement('TBODY');
        table.appendChild(tableBody);
      
        var tr = document.createElement('TR');
           tableBody.appendChild(tr);
          var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("Manufacturer Id"));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("Manufacturer Name"));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("Manufacturer Code"));
               tr.appendChild(td);
               viewArea.appendChild(table);
        for (var i=0; i<result.manufacturer.length; i++){
           var tr = document.createElement('TR');
           tableBody.appendChild(tr);
           
           for (var j=0; j<1; j++){
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode(result.manufacturer[i].manufacturer_id));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode(result.manufacturer[i].manufacturer_name));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode(result.manufacturer[i].code_no));
               tr.appendChild(td);
           }
        }
        viewArea.appendChild(table);
        }

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

                </script>

            <style type="text/css">

            </style>
        
        </head>
        
        <body style="background-color: #771212" >
           <div id="mainContainer">
            <div id= "topHeader">
                <img src="images/logo.jpg" style= "padding:10px; float:left; position:absolute">
                <div id="ashesi"><h1>Ashesi University Inventory Management Systems</h1></div>
            </div>
            
               <div id="topBar" class="ui small icon input" style="width: 1028px">
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
                         <li class=''><a href='manuForm.php'><span>Add</span></a>
                         </li>
                         <li class=''><a><span onclick="getItems()">View</span></a>
                         </li>
                      </ul>
                   </li>
                   <li class='has-sub'><a><span class="fa fa-users">&nbsp&nbspUsers</span></a>
                    <ul>
                        <li><a href='pages/add_hall.php'><span>Add</span></a></li>
                        <li class='last'><a href='pages/view_hall.php'><span>View</span></a></li>
                    </ul>
                       </li>
                   <li class='has-sub'><a><span class="fa fa-wrench">&nbsp&nbspManufacturers</span></a>
                    <ul>
                        <li><a href='addManu.php'><span>Add</span></a></li>
                        <li class='last'><a ><span onclick="getManufacturers()">View</span></a></li>
                    </ul>
                   </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="infoBar">
            <form class="ui form" action="addManu.php" method="POST">

              <div class="field">
                <label>Manufacturer ID</label>
                <input placeholder="ID" type="text" name="manu_id">
              </div>

              <div class="field">
                <label> Name</label>
                <input placeholder="Name" type="text" name="manu_name">
              </div>


              <div class="field">
                <label>Manufacturer Code</label>
                <input placeholder="Code" type="text" name="manu_code">
              </div>

              <div class="field">
               
                  <input type="submit" class="ui secondary button" value="ADD">
                
              </div> 


            </form>
            <table border="2" style="border-collapse:collapse" id="myTable">
              <tr></tr>
            </table>

            <?php
                if (isset($_REQUEST['manu_id'])) {
                  $no=$_REQUEST['manu_id'];
                  $code=$_REQUEST['manu_code'];
                  $name=$_REQUEST['manu_name'];
                  include_once("pages/manufacturer.php");
                  $obj=new manufacturer();

                  $obj->add_manufacturer($no,$name,$code);
                  
                }
                ?>
  </body>
</html>

