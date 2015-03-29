<!-- Jude Norvor -->
<html>
<head>
	<!--<h1 align="center">Delete Product Page</h1>-->
</head>
<body>
	<?php
        $id=$_REQUEST['id'];
            include_once ("user.php");
            $obj=new users();
            $obj->delete_user($id);
            
	header("Location:viewusers.php");
	?>
	</body>
	</html>