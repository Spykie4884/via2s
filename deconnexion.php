<?php
	include('BDD_Connexion.php');
	session_destroy();
	$_SESSION[user_statut] = 'visiteur';
	$_SESSION[user_name] = '';
	header('Location:index.php');
	exit();
?>