<?php

session_start();
include('session.php');

$a=$_SESSION['name'];
echo "welcome $a <br>";
echo "<a href='logout.php'>logout</a>";
echo "<table cellspacing=15>";
echo "<thead>";
echo "<tr><td>id</td><td>uname</td><td>uemail</td><td>upass</td><td>ustatus</td></tr>";
echo "</thead>";
echo "<tbody>";
$sql="SELECT * from users order by id asc";
include('connection.php');
include('function.php');
$query=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($query))
 {	echo "<tr>";
 	echo "<td>". $row['id']."</td>";
 	echo "<td>". $row['uemail']."</td>";
 	echo "<td>". $row['uname']."</td>";
 	echo "<td>". $row['ustatus']."</td>";
 	echo "<td>". $row['upass']."</td>";
 	 echo "<td><a href='editdelete.php?id=".$row['id']." &&action=delete'>DELETE</a>|<a href='editdelete.php?id=".$row['id']."&&action=edit'>EDIT</a></td>";
 	echo "</tr>";
 }


echo "</tbody>";
echo "</table>";

?>