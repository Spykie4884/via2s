<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=via2s;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		echo ("BDD pas connecté");
	}
	try
	{
		$Yaka = new PDO("sqlsrv:Server=192.168.100.5\SQLYAKA;Database=base_test_2015", "sa", "SecurityMaster08");
		$Yaka->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (Exception $e)
	{
		echo 'Yaka pas connecté';
	}
	
	switch(true)
	{
		case ((isset($_POST['descrip']) && ($_POST['descrip'] != ''))):
			$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip');
			$recherche->execute(array(':descrip' => $_POST['descrip'] . '%'));
		case ((isset($_POST['famille']) && ($_POST['famille'] != ''))):
			$recherchefam = $Yaka->prepare('SELECT * FROM famille WHERE description LIKE :famille');
			$recherchefam->execute(array(':famille' => $_POST['famille'] . '%'));
		case ((isset($_POST['niveau']) && ($_POST['niveau'] != ''))):
			$rechercheniv = $Yaka->prepare('SELECT * FROM sous_famille WHERE description LIKE :niveau');
			$rechercheniv->execute(array(':niveau' => $_POST['niveau'] . '%'));
		case ((isset($_POST['reference_part_number']) && ($_POST['reference_part_number'] != ''))):
		case ((isset($_POST['reference']) && ($_POST['reference'] != ''))):
		default:
			echo 'default';
			break;
	}
?>