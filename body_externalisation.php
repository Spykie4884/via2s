<?php
	if((!(isset($_SESSION['user_statut']))) || ($_SESSION['user_statut'] == 'visiteur'))
	{
		header('Location:body_demande_connexion.php');
		exit();
	}
	else
	{
		$page = 'externalisation';
		include('part_externalisation.php');
	}
?>