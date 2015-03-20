<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<h1 align="center">User Update</h1>
</head>
<body>
<?php
$id=$_REQUEST['id'];
include_once("user.php");
$obj=new users();
$row=$obj->view_user($id);

if(isset($_POST['id'])){
$id=$_REQUEST['id'];
$un=$_REQUEST['un'];
$em=$_REQUEST['em'];
$ps=$_REQUEST['ps'];
$pn=$_REQUEST['pn'];
include_once("user.php");
$obj=new users();
if($obj->update_user($id, $un, $em,$ps,$pn)){
    echo "successfully updated";
}else{
    echo"error".mysql_error();
}
}
?>
<form action="userupdate.php" method="POST">
    <div>ID: <input type="text" name="id" value="<?php echo $row['user_id']?>" disabled></div>
		<div>Name: <input type="text" name="un" value="<?php echo $row['user_name']?>"></div>
		<div>Email: <input type="text" name="em" value="<?php echo $row['email']?>"></div>
		<div>Password: <input type="text" name="ps" value="<?php echo $row['password']?>"></div>
		<div>Phone Number: <input type="text" name="pn" value="<?php echo $row['phone']?>"></div>
		<div><input type="submit" value="update"></div>
		</form>
    <h2><a href = 'index.php'>back</a></h2>
</body>
</html>