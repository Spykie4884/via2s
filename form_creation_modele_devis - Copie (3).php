<?php
include('fun_creation_modele_3.php');

$tabvide = 0;
$compteur = 0;
$compteur2 = 0;
$compteur3 = 0;

$t=0;
?>
<form method="post" action="creation_modele_devis_3.php">
	<table class="tab">
		<?php
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
			
			$affiches = $Yaka->prepare("SELECT produit.description as proddescrip, famille.description as famidescrip,  sous_famille.description as ssfamidescrip, produit.prix_unitaire as puht, produit.id as prod_id
											FROM produit, famille, sous_famille
											WHERE famille.id = produit.id_famille AND sous_famille.id = produit.id_sous_famille ORDER BY famidescrip, ssfamidescrip");
			
			$affiches->execute();
			while($info_mod = $affiches->fetch())
			{
				$donnee_modele =  $bdd->prepare('SELECT nom_modele FROM donnee_modele WHERE ref_produit = "'. $info_mod['prod_id'] .'" AND nom_modele = "'. $_SESSION['modele_name'] .'"');
				$donnee_modele->execute();
				if($affdon = $donnee_modele->fetch())
				{
					if($tabvide == 0)
					{
						$meme_nom = $info_mod;
						?>
						<tr class="tete">
							<th class="debut">
								N°
							</th>
							<th class="designation">
								Désignation
							</th>
							<th>
								PU € HT
							</th>
							<th>
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
								echo '<input type="checkbox" name="soupr[]" value="' . $info_mod['prod_id'] . '">';
							?>
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
				<input id="submit" type="submit" value="Supprimer les choix" name="add_to_modele">
			</td>
		</tr>
	</table>
</form>
</br>
</br>