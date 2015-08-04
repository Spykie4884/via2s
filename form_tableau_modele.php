<?php

//VA CHERCHER LA FAMILLE ET SOUS-FAMILLE DE PRODUIT
function va_chercher($BASE, $TABLE, $ARG1, $ARG2)
{
	return $BASE->query('SELECT * FROM '. $TABLE .' WHERE '. $ARG1 .'="'. $ARG2 .'"');
}

//RETOURNE LE NOM DE LA FAMILLE
function sisi_la_famille($val_id)
{
	//nclude('fun_BDD_connexion.php');
	$Yaka = Yaka_connexion();
	//$la_famille = va_chercher('Yaka', 'famille', 'id', $val_id);
	$la_famille = $Yaka->query('SELECT * FROM famille WHERE id ="'. $val_id .'"');
	
	return $la_famille;
}
function affiche_id($t)
{
	$Yaka = Yaka_connexion();
	$la_famille = $Yaka->query('SELECT * FROM produit WHERE reference_part_number ="'. $t .'"');
	return $la_famille;
}

$tabvide = 0;
$compteur = 0;
$compteur2 = 0;
$compteur3 = 0;

$t=0;
$bdd = bdd_connexion();
$Yaka = Yaka_connexion();
$_SESSION['reference_part_number_produit'] = 'M3PPMPP';
$affiches = $Yaka->prepare("SELECT * FROM produit WHERE reference_part_number='". $_SESSION['reference_part_number_produit'] ."' ");
$affiches->execute();
/*
if($t = $affiches->fetch())
	echo ">>>>>>>>" . $t['id'];
else
	echo "rien a montrer";
*/
?>
<div class="col-sm-8">
	<form method="post" action="creer_modele_3.php">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<?php
			if (!empty($_POST['options']))
			{
				$stmt = $bdd->prepare("INSERT INTO donnee_modele (nom_modele, ref_produit) VALUES (:nom_modele, :ref_produit)");
				$stmt->bindParam(':nom_modele', $_SESSION['modele_name']);
				$stmt->bindParam(':ref_produit', $id_produit);
				
				
				//$t = affiche_id($_SESSION['reference_part_number_produit']);
				//echo $_SESSION['reference_part_number_produit'] . ">>>>>>>>>>>>>>".$t;
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
				
				$affiches = $Yaka->prepare("SELECT produit.description as proddescrip, famille.description as famidescrip,  sous_famille.description as ssfamidescrip, produit.prix_unitaire as puht, produit.id as prod_id, produit.reference_part_number as produit_ref
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
							<tr>
									<?php
										$int_or_distr='distri';
										if($int_or_distr=='distr')
										{
											?>
											<th colspan="7" style="background-color: #C4C4E0; text-align: center; border: 1px solid #000;">
												<b>VIA2S DISTRIBUTION</b>
											</th>
											<?php
										}
										else
										{
											?>
											<th colspan="7" style="background-color: #C4C4E0; text-align: center; border: 1px solid #000;">
												<b>VIA2S</b>
											</th>
											<?php
										}
									?>
							</tr>
							<tr class="tete" style="background-color: #E6E6FF; border: 1px solid #000;">
								<th style="background-color: #ACACF3; border: 1px solid #000;">
									Index
								</th>
								<th class="designation" style="background-color: #ACACF3; border: 1px solid #000;">
									Désignation
								</th>
								<th style="background-color: #ACACF3; border: 1px solid #000;">
									REF
								</th>
								<th style="background-color: #ACACF3; border: 1px solid #000;">
									PU € HT
								</th>
								<th style="background-color: #ACACF3; border: 1px solid #000;">
								</th>
							</tr>
							<?php
							?>
							<tr>
								<td style="border: 1px solid black; border-right-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
									<?php
										$compteur++;
										echo $compteur;
									?>
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
									<?php
										echo '<strong>'.$info_mod['famidescrip'].'</strong>';
									?>
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
								<td style="border: 1px solid black; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
							</tr>
			<?php
			//SSFAMILLE
			?>
							<tr>
								<td style="border: 1px solid black; border-right-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
									<?php
										$compteur2++;
										$compteur3 = 0;
										echo $compteur .".". $compteur2;
									?>
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
									<?php
										echo $info_mod['ssfamidescrip'];
									?>
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
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
								<td style="border: 1px solid black; border-right-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
									<?php
										$compteur++;
										$compteur2 = 0;
										$compteur3 = 0;
										echo $compteur .".". $compteur2;
									?>
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
									<?php
										echo '<strong>'.$info_mod['famidescrip'].'</strong>';
									?>
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
							</tr>
				
				<?php
			//SSFAMILLE
			?>
							<tr>
								<td style="border: 1px solid black; border-right-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
									<?php
										$compteur2++;
										$compteur3 = 0;
										echo $compteur .".". $compteur2;
									?>
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
									<?php
										echo $info_mod['ssfamidescrip'];
									?>
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
							</tr>
							<?php
			
						}
						if($meme_nom['ssfamidescrip'] != $info_mod['ssfamidescrip'])
						{
							$meme_nom = $info_mod;
			?>
			<?php
			//SSFAMILLE
			
							?>
							<tr>
								<td style="border: 1px solid black; border-right-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
									<?php
										$compteur2++;
										$compteur3 = 0;
										echo $compteur .".". $compteur2;
									?>
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
									<?php
										echo $info_mod['ssfamidescrip'];
									?>
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
								<td style="border: 1px solid black; border-right-style: hidden; border-left-style: hidden; background-color: #E6E6FF; border: 1px solid #000;">
								</td>
							</tr>
							<?php
				
						}
						?>
						<tr>
							<td style="border: 1px solid black; border: 1px solid #000;">
								<?php
									$compteur3++;
									echo $compteur .".". $compteur2 .".". $compteur3;
									//echo $compteur .".". $compteur3;
								?>
							</td>
							<td style="border: 1px solid black; border: 1px solid #000;">
								<?php
									//DESCRIP
									echo $info_mod['proddescrip'];
								?>
							</td>
							<td style="border: 1px solid black; border: 1px solid #000;">
								<?php
									//REF
									echo $info_mod['produit_ref'];
								?>
							</td>
							<td style="border: 1px solid black; border: 1px solid #000;">
								<?php
									//PU HT
									echo $info_mod['puht'];
								?>
							</td>
							<td style="border: 1px solid black; border: 1px solid #000;">
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
</div>