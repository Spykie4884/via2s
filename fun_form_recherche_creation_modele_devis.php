<?php
function entree_valide(){
	return ((isset($_POST['descrip'])) && ($_POST['descrip'] != ''))
			|| ((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != ''))
			|| ((isset($_POST['famille'])) && ($_POST['famille'] != ''))
			|| ((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))
			|| ((isset($_POST['reference'])) &&($_POST['reference'] != ''));
}
function ligne_tableau_recherche($valid_prod)
{
	$valid_prod->execute(array(':idprod' => $row['id'] . '%'));
	$actif = $valid_prod->fetch();
	if($actif['actif'] == 'Oui')
	{
		$fam->execute(array(':idfam' => $row['id_famille']));
		$ret = $fam->fetch();
		if($color == 'pair')
		{

			echo "<tr class='pair'>
			<td width='100'><span class='casual'>" . $row['reference_part_number'] . "</span></td>
			<td align='left'>" . $row['description'] . "</td>
			<td width='100'>" . $row['prix_publique'] . "</td>
			<td width='100'>" . $ret['description'] . "</td>
			<td width='50'>" ;
			$_SESSION['reference_part_number_produit'] = $row['reference_part_number'];
			$_SESSION['description_produit'] = $row['description'];
			$_SESSION['prix_publique_produit'] = $row['prix_publique'];
			$_SESSION['famille_produit'] = $ret['description'];
			echo '<input type="checkbox" name="check_list[]" value="' . $_SESSION['reference_part_number_produit'] . '"><br>';
			//echo '<input type="checkbox" name="check_list[]" value="value 4">';
			echo "</td>
			</tr>";
			$color = 'impaire';
		}
		else
		{
			echo "<tr class='impaire'>
			<td width='100'><span class='casual'>" . $row['reference_part_number'] . "</span></td>
			<td align='left'>" . $row['description'] . "</td>
			<td width='100'>" . $row['prix_publique'] . "</td>
			<td width='100'>" . $ret['description'] . "</td>
			<td width='50'>" ;
			$_SESSION['reference_part_number_produit'] = $row['reference_part_number'];
			$_SESSION['description_produit'] = $row['description'];
			$_SESSION['prix_publique_produit'] = $row['prix_publique'];
			$_SESSION['famille_produit'] = $ret['description'];
			echo '<input type="checkbox" name="check_list[]" value="' . $_SESSION['reference_part_number_produit'] . '"><br>';
			//echo '<input type="checkbox" name="check_list[]" value="value 4">';
			echo "</td>
			</tr>";
			$color = 'pair';
		}
	}
}
function tableau_recherche()
{
	//Preparation du viez pour ne pouvoir afficher que les produits actifs
	$Yaka = Yaka_connexion();
	$valid_prod = $Yaka->prepare('SELECT * FROM View_produits_actifs WHERE id_produit LIKE :idprod');
	
	//Preparation des données de famille
	$fam = $Yaka->prepare('SELECT * FROM famille WHERE id = :idfam ');

	//Initialisation de la couleur du tableau
	$color = 'pair';
	ligne_tableau_recherche($valid_prod);
	while($row = $recherche->fetch())
	{
		ligne_tableau_recherche($valid_prod);
	}
}
?>