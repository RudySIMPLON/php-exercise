<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exercise 7</title>
</head>
<body>  
	
	<?php 
	if (empty($_POST)) {
		?>
		<form action="index7.php" method="post">
			<select name="choix">
				<option>Mr</option>
				<option>Mme</option>
			</select>
			<input type="text" name="nom">
			<input type="text" name="prenom">
			<input type="file" name="fichier">
			<input type="submit" name="validé">
		</form>
		<?php 
	}
	echo $_POST["choix"] ." ". $_POST["prenom"] ." ". $_POST["nom"] . "!" . " ".$_POST["fichier"] ;
		
	?>



</body>
</html>

