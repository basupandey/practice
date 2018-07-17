<?php
 
 session_start();
   include('login.php');
echo "<h1>welcome</h1>". $_SESSION["name"];
print_r($_SESSION);
//session_destroy();
 
?>