<?php
if (((isset($_POST['descrip'])) && ($_POST['descrip'] != ''))
			|| ((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != ''))
			|| ((isset($_POST['famille'])) && ($_POST['famille'] != ''))
			|| ((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))
			|| ((isset($_POST['reference'])) &&($_POST['reference'] != '')))
{
?>
<div id="content">
	<div id="content_item">
	<br/>
	<br/>
		<center>
		<form method="post" action="creation_modele_devis_3.php">
			<?php
			//if (!$row = $recherche->fetch())
			if ($row = $recherche->fetch())
			{
			?>
				<table class="cote" width="100%">
					<thead>
						<tr>
							<th class="entete">Réf</th>
							<th class="entete">Nom</th>
							<th class="entete">Prix à l'unité</th>
							<th class="entete">Famille</th>
							<th class="entete">Edit</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$valid_prod = $Yaka->prepare('SELECT * FROM View_produits_actifs WHERE id_produit LIKE :idprod');
						$valid_prod->execute(array(':idprod' => $row['id'] . '%'));
						$actif = $valid_prod->fetch();
						$color = 'pair';
						$fam = $Yaka->prepare('SELECT * FROM famille WHERE id = :idfam ');
						if($actif['actif'] == 'Oui')
						{
							$fam->execute(array(':idfam' => $row['id_famille']));
							$ret = $fam->fetch();
							echo "<tr class='pair'>
												<td width='100'><span class='casual'>" . $row['reference_part_number'] . "</span></td>
												<td align='left'>" . $row['description'] . "</td>
												<td width='100'>" . $row['prix_publique'] . "</td>
												<td width='100'>" . $ret['description'] . "</td>
												<td width='50'>" ;
							$_SESSION['reference_part_number_produit'] = $row['reference_part_number'];
							$_SESSION['description_produit'] = $row['description'];
							$_SESSION['prix_publique_produit'] = $row['prix_publique'];
							$_SESSION['idprod'] = $row['id'];
							$_SESSION['famille_produit'] = $ret['description'];
							
							
							
							/*
								CHECKBOX
							*/
							//echo "<a href='edit_produit.php'>A</a>";
							echo '<input type="checkbox" name="options[]" value="' . $_SESSION['idprod'] . '">';
							echo "</td>
									</tr>";
							$color = 'impaire';
						}
						while($row = $recherche->fetch())
						{
							$valid_prod->execute(array(':idprod' => $row['id'] . '%'));
							$act = $valid_prod->fetch();
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
									$_SESSION['idprod'] = $row['id'];
									$_SESSION['famille_produit'] = $ret['description'];
									/*
										CHECKBOX
									*/
									//echo "<a href='edit_produit.php'>A</a>";
									echo '<input type="checkbox" name="options[]" value="' . $_SESSION['idprod'] . '">';
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
									$_SESSION['idprod'] = $row['id'];
									$_SESSION['famille_produit'] = $ret['description'];
									/*
										CHECKBOX
									*/
									//echo "<a href='edit_produit.php'>A</a>";
									echo '<input type="checkbox" name="options[]" value="' . $_SESSION['idprod'] . '">';
									echo "</td>
											</tr>";
									$color = 'pair';
								}
							}
						}
						$affichage = 1;
						?>
						<td>
						</td>
						<td>
						</td>
					</tbody>
				</table>
				<table>
					<tr>
						<td style="text-align:center; font-weight: bold;">
							<input id="submit" type="submit" value="Ajouter dans le modele" name="add_to_modele">
						</td>
					</tr>
				</table>
			</form>
		</center>
	</div>
</div>
<?php
	}
	else
	{
		echo "Aucun produit n'a été trouvé.";
	}
}
else
{
	$_POST['descrip']='';
	$_POST['reference_part_number']='';
	$_POST['prix_publique']='';
	$_POST['prix_unitaire']='';
	$_POST['reference']='';
}

$_POST['descrip'] = '';
$_POST['reference_part_number'] = '';
$_POST['reference'] = '';
$_POST['famille'] = '';
$_POST['niveau'] = '';
?>































<?php
/*$bdd = bdd_connexion();
$Yaka = Yaka_connexion();
//TABLEAU DU HAUT
if ((((isset($_POST['descrip']))) && ($_POST['descrip'] != ''))
	|| (((isset($_POST['reference_part_number']))) && ($_POST['reference_part_number'] != ''))
	|| (((isset($_POST['famille']))) && ($_POST['famille'] != ''))
	|| (((isset($_POST['niveau']))) && ($_POST['niveau'] != ''))
	|| (((isset($_POST['reference']))) && ($_POST['reference'] != '')))
{
?>
<center>
	<div class="tableau">
		<form method="post" action="creation_modele_devis_3.php">
			<table class="tab">
				<tr class="tete">
					<th class="debut">N°</th><th class="designation">
						Désignation
					</th>
					<th>
						PU € HT
					</th>
					<th>
						<!--<input type="checkbox" name="check" value="cochez" onClick="checkUncheck(document.formCreer, document.formCreer.check)">-->
					</th>
				</tr>
				<tr>
					<td>
						<?php
							$compteur++;
							echo $compteur;
						?>
					</td>
					<td>
						<?php
							//DESIGNATION
							echo 'designation';
						?>
					</td>
					<td>
						<?php
							//PRIX HT
							echo 42;
						?>
					</td>
					<td>
						<?php
							//CHOIX
						?>
						<input type="checkbox" name="options[]" value="modele_devis_choix">
						<br/>
					</td>
				</tr>
				<tr class="total_fin">
				</tr>
			</table>
			<input type="submit" value="Submit">
		</form>
	</div>
</center>
<center><h1>Recherche produits</h1></center>
<br/>
<br/>
<?php
}
?>

































<!--<center>
	<form method="post" action="creation_modele_devis_3.php">
		<br>
		<table>
			<tr>
				<td style="text-align:right; font-weight: bold;">
					Nom du produit :
				</td>
				<td>
					<input type="text" name="descrip" id="descrip" />
				</td>
			</tr>
			<tr>
				<td style="text-align:right; font-weight: bold;">
					Référence :
				</td>
				<td>
					<input type="text" name="reference_part_number" id="reference_part_number" />
				</td>
			</tr>
			<tr>
				<td style="text-align:right; font-weight: bold;">
					<label for="famille">Famille :</label>
				</td>
				<td>
					<select name="famille" id="famille">
						<option value=" "></option>
						<?php
						try
						{
							$Yaka = new PDO("sqlsrv:Server=192.168.100.5\SQLYAKA;Database=base_test_2015", "sa", "SecurityMaster08");
						}
						catch (Exception $e)
						{
							echo 'Yaka pas connecté';
						}
						$fami = $Yaka->prepare('SELECT description FROM famille');
						$fami->execute(array(''));
						while($ret = $fami->fetch())
						{
							echo '<option value="' . $ret['description'] . '">' . $ret['description'] . '</option>';
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td style="text-align:right; font-weight: bold;">
					<label for="niveau">Niveau :</label>
				</td>
				<td>
					<select name="niveau" id="niveau">
						<option value=" "></option>
						<?php
						try
						{
							$Yaka = new PDO("sqlsrv:Server=192.168.100.5\SQLYAKA;Database=base_test_2015", "sa", "SecurityMaster08");
						}
						catch (Exception $e)
						{
							echo 'Yaka pas connecté';
						}
						$sfami = $Yaka->prepare('SELECT description FROM sous_famille');
						$sfami->execute(array(''));
						while($ret = $sfami->fetch())
						{
							echo '<option value="' . $ret['description'] . '">' . $ret['description'] . '</option>';
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td style="text-align:right; font-weight: bold;">
					Référence interne :
				</td>
				<td>
					<input type="text" name="reference" id="reference" />
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="text-align:center; font-weight: bold;">
					<input id="submit" type="submit" value="rechercher produit" name="modele_name">
				</td>
			</tr>
		</table>
	</form>
</center>
-->
*/?>