<?php
 session_start();
 

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	//$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="SELECT * FROM users where uname='$name' and upass='$password'and ustatus=1";
	include ('connection.php');
	
	$query=mysqli_query($conn, $sql);
	
	$count=mysqli_num_rows($query);
if($count==1)
	{	
 		$_SESSION['name']=$name;
 		header('location:dashboard.php');
		echo "Login Success";	}
	else
	{echo "Something Wrong! Please correct it";	}

	mysqli_close($conn);
}


?>




<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<fieldset>
			<legend>login</legend>
			<input type="text" name="name" placeholder="name"><br>
			<!---<input type="email" name="email" placeholder="email"><br>---->
			<input type="password" name="password" placeholder="password"><br>
			<input type="radio" name="status" value="1">active<br>
			<input type="radio" name="status" value="0">deactive
			<input type="submit" name="submit" value="login">

		</fieldset>

	</form>
</body>
</html>