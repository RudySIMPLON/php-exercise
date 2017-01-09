<?php 


function compar ($nbr=10,$chiffre=5){

	if ($nbr> $chiffre) {
		echo  "Le premier nombre est le plus grand";
	}

	if ($nbr< $chiffre) {
		echo  "Le premier nombre est le plus petit";
	}


else if ($nbr === $chiffre){

echo  "Les deux nombres sont identiques";
}


}



 echo compar();

 ?>