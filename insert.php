<?php 
include 'connection.php';
session_start();
$username=$_POST['name'];
$password=$_POST['psw'];
$repeatPassword=$_POST['pswrepeat'];
$email=$_POST['email'];
$insert=mysqli_query($connection,"INSERT INTO `signup` values('','$username','$password','$repeatPassword','$email')");
if ($insert==true) {
	$_SESSION['name']=$username;
	header('location:index2.php');
}
else{
	die(error($connection));
}



 ?>