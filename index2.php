<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home page
	</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-icons.css">
	<style type="text/css">
		
    li{
    	
    	padding: 30px;

    }
     ul li {
    	display: inline-flex;
    }

     a{
    	text-decoration: none;
    
    color: whitesmoke;
    font-family: French Script MT;
    font-size: 20px;}

    ul{
       margin-top:-30px;
    	margin-left: -10px;
      background-color: Tomato;
      margin-right: 850px;
      margin-bottom: -90px;

    }
     h1{
    
     	color: whitesmoke;
     	font-family: French Script MT;
     	text-align: ;
     	font-size: 38px;
     	

     }
     .head{
     	background-color: Tomato;
     	margin-left: -10px;
     	margin-top: -10px;
     	margin-right: -10px;

     }
     .head h1{
     	display: inline-block;
     }
     .search input [type='text']{
     	width: 100px;
     	height: 30px;
     	background-color: gray;
     }
     .search input[type='submit']{
     	color: Tomato;
     	background-color: whitesmoke;
     	width: 70px;
     	font-family: French Script MT;
     	font-size: 18px;
     }
     .search{
     margin-top: -10px;
     margin-left: 400px;

     }
     .logout{
     		margin-top: -20px;
     margin-left: 900px;
     }
     body{
     	background-color: whitesmoke;
     }
img{
	margin-top: -2100px;
	margin-left: 180px;
	width: 400px;
	height: 350px;
	border-radius: 30px;
}

.p{
	text-align: center;
	background-color: Tomato;
	margin-top: -300px;
	margin-left: 600px;
	 font-family: French Script MT;
	 font-size: 25px;
	 border: 2px solid;
	 border-radius: 20px;
	 border-color: Tomato;
}
h2{
	text-align: center;
	color:whitesmoke;
	 font-family: French Script MT;
    font-size: 30px;
}
button {
background: Tomato;
	margin-left: 50px;
}
     h4{
         font-family: French Script MT;
         font-size: 19px;
     }
     footer{
    
      font-size: 16px;
      font-family: French Script MT;
     }
.footer{
     text-align: center;
     background-color: tomato;
     color: whitesmoke;
     margin-right: -15px;
     margin-top: 100px;
     margin-left: -15px;
     margin-bottom: -30px;

}


	</style>
 
</head>
<body>
<div class="head">
	<h1>Menya </h1>
	<div class="search">
		<a href="index2.php"><i class="bi bi-search"></i></a>
	<input type="text" name="search"
	  >
	<input type="submit" name="search" value="search" >
	</div>
	<div class="logout"><a href="logout.php"><i class="bi bi-box-arrow-right"></i>logout</a></div>
</div>
<ul>
	
	<li> <a href="index2.php"><i class="bi bi-house"></i>home</a></li>
		<li><a href="study.php"><i class="bi bi-filter-square"></i>study</a></li>
	<li><a href="exercise.php"><i class="bi bi-wallet"></i>exerc</a></li>
	<li><a href="quize.php"><i class="bi bi-textarea-resize"></i>quiz</a></li>
	<li><a href="exam.php"><i class="bi bi-wallet-fill"></i>exam</a></li>
	<li><a href="logout.php">logout</a></li>

</ul>
<div><img src="5.gif"></div>

<div class="p">
	
	<h2>Menya online driving school </h2>
	<p>
	hano muri menya driving school twigisha ibiryanye namategeko yumuhanda<br> 
	.ukanakora imyitozo ni bizamini kubiryanye namategeko yumuhanda.<br>
</p>
</div>


</div>
<div class="footer">
<h4>Our contact</h4>
<footer >
   address:Rwanda ,rubavu, gisenyi
   email:menya1@gmail.com
   tel:0789750435
</footer>
</div>
</body>
</html>
<?php 
session_start();
echo $_SESSION['name']; ?>