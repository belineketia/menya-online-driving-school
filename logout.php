<?php 
include 'connection.php';
session_start();

if (isset($_SESSION['name'])) {
session_unset();
session_destroy();
 header('location:index.php');
}

else{
	header('location:login.php');
}

 ?>