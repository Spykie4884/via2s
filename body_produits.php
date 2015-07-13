<?php
	if((!(isset($_SESSION['user_statut']))) && ($_SESSION['user_statut'] == 'visiteur'))
	{
		header('Location:demande_connexion.php');
		exit();
	}
	$page = 'Produits';
	include('part_produits.php');
?>