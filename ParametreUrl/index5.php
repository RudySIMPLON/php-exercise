<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<a href="index5.php?semaine">SEMAINE</a>

<?php 
$semaine = 12;

if (isset($_GET['semaine'])){

	echo $semaine;
}

 ?>
	
</body>
</html>