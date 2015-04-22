<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../css/style_login.css">
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
    <div id="Logout">
        <?php
        if (isset($_REQUEST['error'])) {

            $msg=$_REQUEST['error'];
            echo $msg;
        }
        ?>
    </div>

    <!-- Begin Page Content -->
    <div id="container">
        <form  action ="validate.php"method="POST">
            <label for="loginmsg" style="color:hsla(0,100%,50%,0.5); font-family:"Helvetica Neue",Helvetica,sans-serif;"><?php  echo @$_GET['msg'];?></label>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required="">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required="">
            <div id="lower">

                <input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
                <input type="submit" id="login"value="Login">
                <a href="signup.php"> <input type="button" id="signup" value="SignUp" onClick="location.href='signup.php'"></a>

            </div>
        </form>
    </div>

</body>
</html>