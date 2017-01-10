<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

</head>
<body>
<ul>
	<a href="index4.php?language">LANGUAGE</a>
	<a href="index4.php?serveur">SERVEUR</a>
</ul>
<?php 
$language= "PHP";
$serveur= "LAMP";

if(isset($_GET['language'])){
	echo $language;

}else if (isset($_GET['serveur'])) {
echo $serveur;

}



 ?>
</body>
</html>