<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
session_start();
$_SESSION['firstname']="DOE";
$_SESSION['lastname']= "Jon";
$_SESSION['age']="24";



 ?>

 <p><?=$_SESSION['firstname']?></p>
 <p><?=$_SESSION['lastname']?></p>
 <p><?=$_SESSION['age']?></p>
 
	
</body>
</html>