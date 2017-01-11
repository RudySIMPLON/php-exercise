<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
<?php 
if (empty($_POST)){

 ?>
 <form action="index6.php" method="post">
<select name="civilite" id="">
	<option>Mr</option>
	<option>Mme</option>
</select>
<input type="text" name="prenom">
<input type="text" name="nom">
<input type="submit" name="validé">

</form>

<?php 
}

	echo $_POST['civilite']. " ".$_POST['prenom']." ".$_POST['nom'];


?>
	
</body>
</html>