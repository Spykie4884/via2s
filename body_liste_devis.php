<?php
	//LIMITATION DES DROITS D'ACCES A LA PAGE
	include('fun_droit_acces.php');
	acces_page_limited();
	
	
	$page = 'Liste devis';
	include('part_liste_devis.php');
?>