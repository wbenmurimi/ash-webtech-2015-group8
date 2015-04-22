<!DOCTYPE html >
        <html >
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Sign up Page</title>
        <link rel="stylesheet" type="text/css" href="../css/style_signup.css">
        <style>
        
        </style>

        </head>

        <body>
             <div id="Error">
                <?php
                if (isset($_REQUEST['error'])) {
                   
                $error=$_REQUEST['error'];
                 echo $error;
                }
                  ?>
            </div>

            <!-- Begin Page Content -->
            <div id="container">
                <form action="signupphp.php" method="post">
                    <label for="loginmsg" style="color:hsla(0,100%,50%,0.5); font-family:"Helvetica Neue",Helvetica,sans-serif;"><?php  echo @$_GET['msg'];?></label>
                     
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username">
                     <label for="username">Email:</label>
                    <input type="email" id="email" name="email">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                    <label for="password"> Confirm Password:</label>
                    <input type="password" id="confirmpassword" name="confirmpassword">
                    <div id="lower">
                        <input type="submit" value="SignUp">
                        
                    </div><!--/ lower-->
                </form>
            </div>
            
        </body>
        </html>