<?php
include('session.php');
include('connection.php');
include('function.php');
$action=$_GET['action'];
$id=$_GET['id'];
switch($action)
{
	case 'delete':
	{
		$table='users';
		delete($table, $id);
		break;
	}
	case 'edit':
	{
		editUser($id);
		//echo "edit";
		 if(isset($_POST['submit']))
{

	$idu=$_POST['uid'];
	$nameu=$_POST['uname'];
	$emailu=$_POST['uemail'];
	$passwd=$_POST['upass'];
	$statusu=$_POST['ustatus'];
	 
	 
 
if(empty($passwd))
{
	$passu='';
}

else{
	$passu=($passwd);
}
}
		break;
	}
	default:
	{
		echo "Nothing to do";
		break;
	}
}



	 
	updateUser($idu, $nameu, $emailu, $passu, $statusu);
 
?>
