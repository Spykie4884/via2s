<?php
	if((!(isset($_SESSION['user_statut']))) && ($_SESSION['user_statut'] == 'visiteur'))
	{
		header('Location:demande_connexion.php');
		exit();
	}
	$page="inscrip";
	include('vmenu_contact.php');
	include('part_demande_adhesion.php');
?>