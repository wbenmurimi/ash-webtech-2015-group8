    <?php

    ?>
    <html>
        <head>
            <title>Add Inventory</title>
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
    function getItems(){
      alert("clicked");
    
      var myUrl= "control.php?cmd=2";//url
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
               td.appendChild(document.createTextNode("Item Code"));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("Barcode"));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("Item Name"));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("Manufacturer Name"));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("Price"));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("Date Bought"));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("Repair Date"));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("Condition"));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("Location "));
               tr.appendChild(td);
                var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("Department "));
               tr.appendChild(td);
                var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("EDIT "));
               tr.appendChild(td);
                var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("DELETE "));
               tr.appendChild(td);
               viewArea.appendChild(table);
        for (var i=0; i<result.item.length; i++){
           var tr = document.createElement('TR');
           tableBody.appendChild(tr);
           
           for (var j=0; j<1; j++){
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode(result.item[i].item_number));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode(result.item[i].barcode_number));
               tr.appendChild(td);
               var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode(result.item[i].item_name));
               tr.appendChild(td);
                var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode(result.item[i].manufacturer));
               tr.appendChild(td);
                var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode(result.item[i].price));
               tr.appendChild(td);
                var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode(result.item[i].date_bought));
               tr.appendChild(td);
                var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode(result.item[i].last_repair_date));
               tr.appendChild(td);
                var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode(result.item[i].conditions));
               tr.appendChild(td);
               //  var td = document.createElement('TD');
               // td.width='150';
               // td.height='30';
               // td.appendChild(document.createTextNode(result.item[i].location));
               // tr.appendChild(td);
                var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode(result.item[i].department));
               tr.appendChild(td);
                var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("EDIT"));
               tr.appendChild(td);
                var td = document.createElement('TD');
               td.width='150';
               td.height='30';
               td.appendChild(document.createTextNode("DELETE"));
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
                         <li class=''><a ><span onclick="getItems()">View</span></a></li>
                         <!-- </li> -->
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
                        <li><a href='pages/add_manufacturer.php'><span>Add</span></a></li>
                        <li class='last'><a href='pages/view_manufacturer.php'><span>View</span></a></li>
                    </ul>
                   </li>
                </ul>
    </div>
                        </div>
               </div>
            <div id="infoBar">
            <form class="ui form" action="manuForm.php" method="POST">
                <h2 class="ui dividing header"> Inventory Information Form </h2>
               <div class="field"> 
                    <label> Item Number </label> <input style="width:200px; float:left" type="text" name="item-code" placeholder="Enter Item Code Here">
                </div>
                <div class="field"> 
                    <label> Barcode Number </label> <input style="width:200px; float:left" type="text" name="bar-code" placeholder="Enter Barcode Here">
                </div>
                <div class="field"> 
                    <label> Item Name </label>
                    <input style="width:600px; float:left"type="text" name="item-nm" placeholder="Enter Item Name Here">
                </div>
                <div class="three fields">
                <div class="field"> 
                    <label> Manufacturer Name </label>
                    <select style="width:300px" type="text" name="manu-nm" >
                      <option value="0" >---select manufacturer</option>
                      <option value="Sonny" >Sonny</option>
                      <option value="Samsung" >Samsung</option>
                      <option value="Lenovo" >Lenovo</option>
                      <option value="HP" >HP</option>
                    </select>
                </div>
                <div class="field"> 
                    <label>Price</label>
                    <input style="width:150px" float="left" type="text" name="price" placeholder="Enter Price Here">
                </div> 
                <div class="field">
                    <label> Date Bought </label>
                    <input style="width:150px" type="text" name="date-bought" placeholder="Enter Date Bought Here">
                </div>
                </div>
                <div class="field"> 
                    <label> Last Repair Date </label>
                    <input  style="width:200px; float:left" type="text" name="repair-date" placeholder="Enter Repair Date here">
                </div>
                 <div class="field">
                    <label> Location </label>
                    <input style="width:150px" type="text" name="location" placeholder="Enter Location Here">
                </div>
                <div class="field">
                <label> Department </label>
                <select name="department"style="width:300px; float:left" >
                  <option disabled="disabled" value=""> --Department-- </option>
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
                <select name="condition"style="width:300px; float:left" >
              <option value=""> --Condition-- </option>
                        <option value="excellent">Excellent</option>
                        <option value="good">Good</option>
                        <option value="fair">Fair</option>
                        <option value="poor">Poor</option>
                    </select>
                </div>                
                    <div class="field">
                      <input type="submit" class="ui secondary button" value="ADD">
                      
                    </div> 
                
                </div>
            
        </form>

         <?php
            include_once("pages/item.php");
            $obj=new items();


            $obj->add_items();
            echo "finished";
          ?>

            </div>
           </div>
        </body>
        





    </html>