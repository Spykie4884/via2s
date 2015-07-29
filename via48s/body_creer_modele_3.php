<?php
if(isset($_POST["OUI"]) || !empty($_POST['soupr'])
		|| isset($_POST['descrip']) || isset($_POST['reference_part_number'])
		|| isset($_POST['famille']) || isset($_POST['niveau'])
		|| isset($_POST['reference']) || (!empty($_POST['options'])))
{
	if((isset($_SESSION['modele_name']) && ($_SESSION['modele_name']!=' ')) || !empty($_POST['soupr']))
	{
		include('fun_creation_modele.php');
		include('form_affiche_recherche_modele.php');
		include('form_recherche_produits_modele.php');
		include('form_tableau_modele.php');
	}
	else
	{
		echo "Veuillez ajouter un nom de modèle correct.";
	}
}
else
{
	if(isset($_POST["NON"]))
	{
		include('body_creer_modele.php');
	}
	else
	{
		echo "PAGE NON AUTORISÉE";
	}
}
?>