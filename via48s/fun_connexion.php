<?php
include('fun_bdd_connexion.php');

function connexion($login, $mdp)
{
	$bdd = bdd_connexion();
	$connect = $bdd->prepare('SELECT * FROM utilisateurs WHERE user_email="'.$login.'" AND user_mdp="'.$mdp.'"');
	$connect->execute();
	if($co = $connect->fetch())
	{
		if($co['valide'])
		{
			$_SESSION['co'] = 1;
			$_SESSION['user_name'] = $co['user_name'];
			$_SESSION['user_Fname'] = $co['user_Fname'];
			$_SESSION['user_societe'] = $co['user_societe'];
			$_SESSION['user_function'] = $co['user_function'];
			$_SESSION['user_phone'] = $co['user_phone'];
			$_SESSION['user_mobile'] = $co['user_mobile'];
			$_SESSION['user_fax'] = $co['user_fax'];
			$_SESSION['user_email'] = $co['user_email'];
			$_SESSION['user_address'] = $co['user_address'];
			$_SESSION['user_zipCode'] = $co['user_zipCode'];
			$_SESSION['user_city'] = $co['user_city'];
			$_SESSION['user_country'] = $co['user_country'];
			$_SESSION['user_statut'] = $co['user_statut'];
			$_SESSION['user_mdp'] = $co['user_mdp'];
			$_SESSION['user_date'] = $co['date_creation'];
		}
		else
		{
			echo "Veuillez patienter, nous procédons à la vérification des renseignements fourni.";
		}
	}
	else
	{
		echo "Compte non existant.";
	}
}
if(isset($_POST['user_mail']) && isset($_POST['user_mdp']))
{
	connexion($_POST['user_mail'], $_POST['user_mdp']);
}