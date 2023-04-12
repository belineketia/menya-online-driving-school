<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: tomato;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  margin-left: 300px;
  margin-right: 300px;
  margin-top: 0px;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;

}
h1{
	  font-family: French Script MT;
	  font-size: 60px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: tomato;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
label{
	font-family: French Script MT;
	font-size: 20px;
}
</style>
<?php 
include 'connection.php';
if (isset($_POST['submit'])) {
	

session_start();
$display=mysqli_query($connection,"SELECT* FROM `signup`");
if ($display == true) {
		$_SESSION['name']=$username;
	header('location:index2.php');
} else {
	die(error($connection));
}
}

 ?>
</head>
<body>

<form method="post" action="insert.php">
  <div class="container">
    <h1>login form</h1>
    <p>Please fill in this form to login in  an account.</p>
    <hr>

    <label for="email"><b>username</b></label>
    <input type="text" placeholder="Enter username" name="name" id="name" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="psw-repeat" required>
    <hr>

    <button type="submit" class="registerbtn">Login</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="signup.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
