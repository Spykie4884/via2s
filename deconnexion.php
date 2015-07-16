<?php
	session_start();
	include('BDD_Connexion.php');
	include('fun_deconnexion.php');
	deco();
	header('Location:index.php');
	exit();
?>