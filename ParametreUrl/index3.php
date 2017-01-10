<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<ul>

<a href="index3.php?datedebut">DAtedebut</a>
<a href="index3.php?datefin">DateFin</a>


</ul>
<?php 
$datedebut = "2/05/2016" ;
$datefin = "27/11/2016" ;



if(isset($_GET["datedebut"])){

	echo $datedebut;

	} else if (isset($_GET["datefin"])){

		echo $datefin;
	}

 ?>
	
</body>
</html>