<?php
if(isset($_POST['quantitee']))
{
	$_SESSION['quanti'] = $_POST['quantitee'];
}
if(isset($_POST["OUI"]) || !empty($_POST['soupr'])
		|| isset($_POST['descrip']) || isset($_POST['reference_part_number'])
		|| isset($_POST['famille']) || isset($_POST['niveau'])
		|| isset($_POST['reference']) || (!empty($_POST['options']))
		|| isset($_POST['quantitee']))
{
	/*if(isset($_POST['quanti']))
	{
		$_SESSION['quanti'] = $_POST['quanti'];
	}*/
	if((isset($_SESSION['devis_name']) && ($_SESSION['devis_name']!=' ')))
	{
		include('form_tableau_devis.php');
	}
	else
	{
		echo "Veuillez ajouter un nom de devis correct.";
	}
}
else
{
	if(isset($_POST["NON"]))
	{
		include('body_creer_devis.php');
	}
	else
	{
		echo "PAGE NON AUTORISÉE";
	}
}
?>