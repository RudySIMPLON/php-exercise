<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<a href="index6.php?batiment">BATIMENT</a>
<a href="index6.php?salle">SALLE</a>


<?php 

$batiment = 12;
$salle= 101;

if (isset($_GET["batiment"])){

	echo $batiment ;
} else if (isset($_GET['salle'])){

echo $salle;
}


 ?>
	
</body>
</html>