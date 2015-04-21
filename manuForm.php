    <?php

    ?>
    <html>
        <head>
            <title>Index</title>
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
                         <li class=''><a href='pages/page_2.php'><span>Add</span></a>
                         </li>
                         <li class=''><a href='pages/page_3.php'><span>View</span></a>
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
                        <li><a href='pages/add_manufacturer.php'><span>Add</span></a></li>
                        <li class='last'><a href='pages/view_manufacturer.php'><span>View</span></a></li>
                    </ul>
                   </li>
                </ul>
    </div>
                        </div>
               </div>
            <div id="infoBar">
            <form class="ui form">
                <h2 class="ui dividing header"> Inventory Information Form </h2>
                <div class="field"> 
                    <label> Barcode Number </label> <input style="width:200px; float:left" type="text" name="bar-code" placeholder="Enter Barcode Here">
                </div>
                <div class="field"> 
                    <label> Item Name </label>
                    <input style="width:600px; float:left" type="text" name="item-nm" placeholder="Enter Name Here">
                </div>
                <div class="three fields">
                <div class="field"> 
                    <label> Manufacturer Name </label>
                    <input style="width:300px" type="text" name="manu-nm" placeholder="Enter Manufacturer Here">
                    </div>
                <div class="field"> 
                    <label>Price</label>
                    <input style="width:150px" float="left" type="text" name="price" placeholder="Enter Price Here">
                </div> 
                <div class="field">
                    <label> Date Bought </label>
                    <input style="width:150px" type="text" name="date-bought" placeholder="Enter Barcode Here">
                </div>
                </div>
                <div class="field"> 
                    <label> Last Repair Date </label>
                    <input  style="width:200px; float:left" type="text" name="bar-code" placeholder="enter Date here">
                </div>
                
                <div class="field">
                    <label> Condition </label>
                    <select style="width:300px; float:left" >
                        <option value=""> --Condition-- </option>
                        <option value="excellent">Excellent</option>
                        <option value="good">Good</option>
                        <option value="fair">Fair</option>
                        <option value="poor">Poor</option>
                    </select>
                </div>                
                    <div class="field">
                        <div class="ui secondary button"> ADD </div>
                    </div> 
                
                </div>
            
        </form>

   

            </div>
           </div>
        </body>
        





    </html>