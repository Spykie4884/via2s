<?php
if((isset($_POST['user_name']))&& ($_POST['user_name'] != '')
	&& (isset($_POST['user_Fname']))&& ($_POST['user_Fname'] != '')
	&& (isset($_POST['user_function']))&& ($_POST['user_function'] != '')
	&& (isset($_POST['user_societe']))&& ($_POST['user_societe'] != '')
	&& (isset($_POST['user_phone']))&& ($_POST['user_phone'] != '')
	&& (isset($_POST['user_email']))&& ($_POST['user_email'] != '')
	&& (isset($_POST['user_address']))&& ($_POST['user_address'] != '')
	&& (isset($_POST['user_zipCode']))&& ($_POST['user_zipCode'] != '')
	&& (isset($_POST['user_city']))&& ($_POST['user_city'] != '')
	&& (isset($_POST['user_mdp']))&& ($_POST['user_mdp'] != '')
	&& (isset($_POST['user_mdprep']))&& ($_POST['user_mdprep'] != '')
	&& (isset($_POST['user_statut']))&& ($_POST['user_statut'] != '')
	)
{
	if($_POST['user_mdp'] == $_POST['user_mdprep'])
	{
		if(($_POST['user_statut'] == 'client') ||
			($_POST['user_statut'] == 'commercial') ||
			($_POST['user_statut'] == 'administrateur') ||
			($_POST['user_statut'] == 'super-administrateur'))
		{
			$bdd = bdd_connexion();
			$registration = $bdd->prepare('INSERT INTO utilisateurs(
				user_name, user_Fname, user_societe, user_function,
				user_phone, user_mobile, user_fax, user_email,
				user_address, user_zipCode, user_city, user_country,
				user_statut, user_mdp
				) VALUES(
				:user_name, :user_Fname, :user_societe, :user_function,
				:user_phone, :user_mobile, :user_fax, :user_email,
				:user_address, :user_zipCode, :user_city, :user_country,
				:user_statut, :user_mdp
				)');
			$registration->execute(array(
				'user_name' => $_POST['user_name'],
				'user_Fname' => $_POST['user_Fname'],
				'user_societe' => $_POST['user_societe'],
				'user_function' => $_POST['user_function'],
				'user_phone' => $_POST['user_phone'],
				'user_mobile' => $_POST['user_mobile'],
				'user_fax' => $_POST['user_fax'],
				'user_email' => $_POST['user_email'],
				'user_address' => $_POST['user_address'],
				'user_zipCode' => $_POST['user_zipCode'],
				'user_city' => $_POST['user_city'],
				'user_country' => $_POST['user_country'],
				'user_statut' => $_POST['user_statut'],
				'user_mdp' => $_POST['user_mdp'],
			));
			echo 'Contact bien enregistré';
		}
		else
			echo 'pas autorisé à créer ce type de client';
	}
	else
	{
		echo 'Mot de passe invalide';
	}
}
?>

<?php
	include('formulaire_creation_contact.php');
?>