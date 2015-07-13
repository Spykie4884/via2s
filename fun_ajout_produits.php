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
}
catch (Exception $e)
{
	echo 'Yaka pas connecté';
}
$product_register = $Yaka->prepare('INSERT INTO produit(
						description, reference_part_number, prix_unitaire, prix_publique,
						prix_moyen_constate, reference
						) VALUES(
						:description; reference_part_number, :prix_unitaire, :prix_publique,
						:prix_moyen_constate, :reference
						)');
$product_register->execute(array(
						'description' => $_POST['description'],
						'reference_part_number' => $_POST['reference_part_number'],
						'prix_unitaire' => $_POST['prix_unitaire'],
						'prix_publique' => $_POST['prix_publique'],
						'prix_moyen_constate' => $_POST['prix_moyen_constate'],
						'reference' => $_POST['reference'],
					));
?>