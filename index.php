<html>
    <head>
        <title>Index</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styles.css">
        <script>
            function validate() {
                var obj = document.getElementById("x");
                var str = obj.value;
                if (str.length <= 0) {
                    obj.style.backgroundColor("red");
                    return false;
                }
                ;
                else{
                    obj.style.backgroundColor("green");
                    return false;
                }
                ;

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
                        <span id="img_position"></span><img src="images/logo.jpg"></td>
                    <td id="header_text">
                        <h2>Ashesi Inventory</h2>
                    </td>
                </tr>
                <!-- </tr> -->
                <tr>
                    <td id="mainnav">
          <div id='cssmenu'>
<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='active has-sub'><a href='#'><span>Inventory</span></a>
      <ul>
         <li class=''><a href='#'><span>Add</span></a>
<!--            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>-->
         </li>
         <li class=''><a href='#'><span>View</span></a>
<!--            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>-->
         </li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Lecturer</span></a>
    <ul>
        <li><a href='#'><span>Add</span></a></li>
        <li class='last'><a href='#'><span>View</span></a></li>
    </ul>
       </li>
   <li class='last'><a href='#'><span>Manufacturer</span></a></li>
</ul>
</div>
                    </td>
                    <td id="content">

                        <div id= "my_search">
                            <input type="text" id="txtSearch" placeholder="Search" />
                            <span class="menuitem"><button>search</button></span>
                        </div>

                        <div id="divContent">
                            <table id="tableExample" class="reportTable" width="100%">
                                <tr class="header">
                                    <td>column1</td>
                                    <td>column2</td>
                                    <td>column3</td>
                                    <td>column4</td>
                                </tr>
                                <tr class="row1">
                                    <td>data example</td>
                                    <td>123</td>
                                    <td>01/01/2014</td>
                                    <td>data</td>
                                </tr>
                                <tr class="row2">
                                    <td>data example</td>
                                    <td>123</td>
                                    <td>01/01/2014</td>
                                    <td>data</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table> 
        </div>
        
    </body>
        </head>
</html>	