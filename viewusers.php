<html>
    <head>
    <h1 align="center">View Users</h1>
    </head>
    <body>
<?php
include_once("user.php");
$obj=new users();
$obj->view_all();
	
	echo "<table border='1' align='center'>";
	echo "<tr>
	<td align = 'center'>User ID</td>
	<td align = 'center'>User Name</td>
	<td align = 'center'>User Email</td>
	<td align = 'center'>Password</td>
	<td align = 'center'>Phone Number</td>


</tr>";
while($row=$obj->fetch()){
    echo"
	<tr>
		<td align = 'center'>{$row['user_id']}</td>
		<td align = 'center'>{$row['user_name']}</td>
		<td align = 'center'>{$row['email']}</td>
		<td align = 'center'>{$row['password']}</td>
		<td align = 'center'>{$row['phone']}</td>
		<td align = 'center'><a href='userupdate.php?id={$row['user_id']}'>Edit</a></td>
		<td align = 'center'><a a href='delete_user.php?id={$row['user_id']}'>Delete</a></td>
	</tr>";
                
}
?>
    <h2><a href = 'index.php'>back</a></h2>   
    </body>
</html>