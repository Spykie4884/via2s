<?php
include('fun_creation_modele_3.php');

$tabvide = 0;
$compteur = 0;
$compteur2 = 0;
$compteur3 = 0;

$t=0;

$_SESSION['TOTAL_DEVIS'] = 0;

//$dev_prod_qte =  $bdd->prepare('SELECT * FROM devis_produit_qte WHERE id_modele = "'. $affdon['nom_modele'] .'" AND id_produit = "'. $info_mod['prod_id'] .'"');
//$dev_prod_qte->execute();

?>

<form method="post" action="creation_devis.php">
	<table class="tab">
		<?php
		if(isset($_SESSION['modele_name']))
		{
			$_SESSION['modele_name'] = $_SESSION['client_modele'];
		}
		if (!empty($_POST['options']))
		{
			
			
			$stmt = $bdd->prepare("INSERT INTO donnee_modele (nom_modele, ref_produit) VALUES (:nom_modele, :ref_produit)");
			$stmt->bindParam(':nom_modele', $_SESSION['client_modele']);
			$stmt->bindParam(':ref_produit', $id_produit);
			foreach($_POST['options'] as $checkU)
			{
				$id_produit = $checkU;
				$stmt->execute();
			}
		}
		if (!empty($_POST['soupr']))
		{
			$stmtt = $bdd->prepare("DELETE FROM donnee_modele WHERE ref_produit = :ref");
			$stmtt->bindParam(':ref', $id_produit);
			foreach($_POST['soupr'] as $checkU)
			{
				$id_produit = $checkU;
				$stmtt->execute();
			}
		}
		
		if((isset($_SESSION['modele_name'])) && ($_SESSION['modele_name'] != ' '))
		{
			$donnee_modele =  $bdd->prepare('SELECT * FROM donnee_modele WHERE nom_modele = "'. $_SESSION['modele_name'] .'"');
			$donnee_modele->execute();
			
			$affiches = $Yaka->prepare("SELECT produit.description as proddescrip, famille.description as famidescrip,  sous_famille.description as ssfamidescrip, produit.prix_unitaire as puht, produit.id as prod_id, produit.prix_publique as pvht
											FROM produit, famille, sous_famille
											WHERE famille.id = produit.id_famille AND sous_famille.id = produit.id_sous_famille ORDER BY famidescrip, ssfamidescrip");
			$affiches->execute();
			
			
			
			while($info_mod = $affiches->fetch())
			{

					$donnee_modele =  $bdd->prepare('SELECT * FROM donnee_modele WHERE ref_produit = "'. $info_mod['prod_id'] .'" AND nom_modele = "'. $_SESSION['modele_name'] .'"');
					$donnee_modele->execute();
					if($affdon = $donnee_modele->fetch())
					{
						$dev_prod_qte =  $bdd->prepare('SELECT * FROM devis_produit_qte WHERE donnee_name = "'. $affdon['nom_modele'] .'"');
						//$dev_prod_qte =  $bdd->prepare('SELECT * FROM devis_produit_qte WHERE id_donnee_modele = "'. "ikhnsmdgnr" .'"');
						$dev_prod_qte->execute();
						$qte = $dev_prod_qte->fetch();
						//echo "ICI >>>>>>>>>>>>>>>>>>>>>>>>>>>>" . $qte['quantite'] . "<<<<<<<<<<<<<<<<<";
						//echo "ICI >>>>>>>>>>>>>>>>>>>>>>>>>>>>" . $affdon['id_donne_modele'] . "<<<<<<<<<<<<<<<<<";
					//CALCULE DE LA QTE, S/TOTAL ET TOTAL

					//QTE
					$QTE = 42;

					//S/TOTAL
					$sstotal = $QTE * $info_mod['puht'];

					//TOTAL
					$_SESSION['TOTAL_DEVIS'] += $sstotal;


					if(isset($_POST[$info_mod['prod_id']]))//update les qte
					{
						echo "qte insert";
					}




					if($tabvide == 0)
					{
						$meme_nom = $info_mod;
						echo '<h3 style="tewxt-align: center">'.$_SESSION['nom_devis'].'</h3>';
						?>
						<tr class="tete">
							<th class="debut">
								N°
							</th>
							<th class="designation">
								Désignation
							</th>
							<th>
								PU <br/>€ HT
							</th>
							<th>
								QTE
							</th>
							<th>
								Changer QTE
							</th>
						</tr>
						<?php
						?>
						<tr>
							<td>
								<?php
									$compteur++;
									echo $compteur;
								?>
							</td>
							<td>
								<?php
									echo '<p style="text-align:left;"><strong>'.$info_mod['famidescrip'].'</strong></p>';
								?>
							</td>
							<td>
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									$compteur2++;
									$compteur3 = 0;
									echo $compteur .".". $compteur2;
								?>
							</td>
							<td>
								<?php
									echo '<p style="text-align:left; text-decoration:underline; text-indent: 15px;">'.$info_mod['ssfamidescrip'].'</p>';
								?>
							</td>
							<td>
							</td>
							</td>
							<td>
							</td>
							<td>
							</td>
						</tr>
						<?php
						$tabvide = 1;
					}
					if($meme_nom['famidescrip'] != $info_mod['famidescrip'])
					{
						$meme_nom = $info_mod;
						?>
						<tr>
							<td>
								<?php
									$compteur++;
									$compteur2 = 0;
									$compteur3 = 0;
									echo $compteur .".". $compteur2;
								?>
							</td>
							<td>
								<?php
									echo '<h4 style="text-align:left;">'.$info_mod['famidescrip'].'</h4>';
								?>
							</td>
							<td>
							</td>
							</td>
							<td>
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<td>
								<?php
									$compteur2++;
									$compteur3 = 0;
									echo $compteur .".". $compteur2;
								?>
							</td>
							<td>
								<?php
									echo '<p style="text-align:left; text-decoration:underline; text-indent: 15px;">'.$info_mod['ssfamidescrip'].'</p>';
								?>
							</td>
							<td>
							</td>
							</td>
							<td>
							</td>
							<td>
							</td>
						</tr>
						<?php
					}
					if($meme_nom['ssfamidescrip'] != $info_mod['ssfamidescrip'])
					{
						$meme_nom = $info_mod;
						?>
						<tr>
							<td>
								<?php
									$compteur2++;
									$compteur3 = 0;
									echo $compteur .".". $compteur2;
								?>
							</td>
							<td>
								<?php
									echo '<p style="text-align:left; text-decoration:underline; text-indent: 15px;">'.$info_mod['ssfamidescrip'].'</p>';
								?>
							</td>
							<td>
							</td>
							</td>
							<td>
							</td>
							<td>
							</td>
						</tr>
						<?php
					}
					?>
					<tr>
						<td>
							<?php
								$compteur3++;
								echo $compteur .".". $compteur2 .".". $compteur3;
							?>
						</td>
						<td>
							<?php
								echo $info_mod['proddescrip'];
							?>
						</td>
						<td>
							<?php
								echo $info_mod['puht'];
							?>
						</td>
						<td>
							<?php
								echo $qte['quantite'];
							?>
						</td>
						<td>
							<p><input type="number" name="<?php echo $info_mod['prod_id']; ?>" /></p>
						</td>
					</tr>
					<?php
				}
			}
		}
		?>
	</table>
	<table>
		<tr>
			<td style="text-align:center; font-weight: bold;">
				<input id="submit" type="submit" value="Mise à jour du devis" name="maj_devis">
			</td>
			<td style="text-align:center; font-weight: bold;">
				<input id="submit" type="submit" value="Valider un devis" name="valid_devis">
			</td>
		</tr>
	</table>
</form>
</br>
</br>