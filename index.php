<?php

if (isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$status=$_POST['status'];
	$password=$_POST['password'];

	include('connection.php');
	
	$sql="INSERT INTO users(uname, uemail, upass, ustatus ) values('$name', '$email', '$password', '$status')";

	$query=mysqli_query($conn, $sql);

	if($query){
		echo "Data has been added";
	}
	else{
		echo "something went wrong";
	}
	Mysqli_close($conn);

}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
</head>
<body>

	<form method="POST" action="" enctype="multipart/form-data">
		<fieldset>
			<legend>ADD USER</legend>
		<input type="text" name="name" placeholder="Your Name" required="required"><br>
		<input type="email" name="email" placeholder="Your Email" required="required"><br>
		<input type="password" name="password" placeholder="Password" required="required"><br>
		<input type="radio" name="status" value="1">active <br>
		<input type="radio" name="status" value="0">deactive
		<input type="submit" name="submit" value="Add User">
		</fieldset>

	</form>
</body>
</html>