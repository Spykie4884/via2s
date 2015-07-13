<?php
	if((!(isset($_SESSION['user_statut']))) && ($_SESSION['user_statut'] == 'visiteur'))
	{
		header('Location:demande_connexion.php');
		exit();
	}
	$page = 'modele_de_vente';
	include('part_modele_de_vente.php');
?>