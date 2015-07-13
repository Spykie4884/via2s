<?php
	if($page!="organisation")
		echo'<li><a href="organisation.php">Organisation</a></li>';
	else
		echo'<li>Organisation ></li>';
		
	if($page!="bureaux")
		echo'<li><a href="bureaux.php">Bureaux</a></li>';
	else echo'<li>Bureaux ></li>';
	
	if($page!="partenaires")
		echo'<li><a href="partenaires.php">Partenaires</a></li>';
	else
		echo'<li>Partenaires ></li>';
	
	if($page!="emplois")
		echo'	<li><a href="emplois.php">Emplois</a></li>';
	else echo'	<li>Emplois ></li>';
?>