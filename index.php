    <?php
    //require("pages/check.php");
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
        <body>
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

            </div>

        </body>
            </head>
    </html>	