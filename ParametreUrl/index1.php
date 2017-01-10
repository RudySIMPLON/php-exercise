<?php 


$nom= "Nemare";
$prenom= "Jean";

	if(isset($_GET["nom"])){
		echo $nom;

	}
	 else if(isset($_GET["prenom"])) 
	{ echo $prenom;

	}
	else{
echo "Vous etes sur la page d'accueil";
	}



 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
 
      <a href="index1.php?nom">Nom</a>
       <a href="index1.php?prenom">Prenom</a>
       
   
</body>
</html>