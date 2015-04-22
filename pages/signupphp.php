<?php
    if (isset($_REQUEST['username'])) {
        $name=$_REQUEST['username'];
        $email=$_REQUEST['email'];
        $pass1=$_REQUEST['password'];
        $pass2=$_REQUEST['confirmpassword'];
        include_once("user.php");
        $obj=new users();

        if ($pass1==$pass2) {
          
            $obj->add_user($name,$email,$pass1);
           
            header("location:login.php");
        }
        else{
            $error =$_SESSION['error']="Passwords do not match. Try again!";
            header("location:signup.php?error=$error");

        }
            
    }
    else{
        echo "string";
    }
?>