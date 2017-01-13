<?php 

setcookie("nom",$_GET['nom'],time()+3600);
setcookie("prenom",$_GET['prenom'],time()+3600);




 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="">
<input type="text" name="prenom">
<input type="text" name="nom">
<input type="submit" name="valider">
	



</form>
	
</body>
</html>