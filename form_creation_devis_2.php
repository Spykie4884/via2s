<?php
include('fun_creation_modele_3.php');

$tabvide = 0;
$compteur = 0;
$compteur2 = 0;
$compteur3 = 0;

$t=0;

$_SESSION['TOTAL_DEVIS'] = 0;



if(isset($_SESSION['modele_name']))
{
	$_SESSION['modele_name'] = $_SESSION['client_modele'];
}

if(isset($_POST['supr_ok']))
{
	$select = $bdd->prepare('SELECT * FROM donnee_modele WHERE nom_modele = "'. $_SESSION['client_modele'] .'"');
	$select->execute();

	$stmtt = $bdd->prepare("DELETE FROM donnee_modele WHERE nom_modele = :ref");
	$stmtt->bindParam(':ref', $_SESSION['client_modele']);
	/*$stmtt2 = $bdd->prepare("DELETE FROM modele WHERE nom_modele = :ref");
	$stmtt2->bindParam(':ref', $_SESSION['client_modele']);*/
	while($s = $select->fetch())
	{
		$stmtt->execute();
		$stmtt2->execute();
	}
	echo "Devis supprimé";
}
else
{
	if((isset($_POST['etape_suivante'])) || (isset($_POST['modifier_devis'])) || (isset($_POST['suppr_devis'])) || (isset($_POST['creer_modele'])) || (isset($_POST['create_pdf'])))
	{
		if((isset($_POST['etape_suivante'])))
		{
			echo "next devis";
			//include('');
		}
		else
		{
			if((isset($_POST['modifier_devis'])))
			{
				echo "modif devis";
				//include('');
			}
			else
			{
				if((isset($_POST['suppr_devis'])))
				{
					echo "Voulez-vous vraiment <b>supprimer</b> le devis " . $_SESSION['client_modele'] . " ?";
				?>
					<form method="post" action="creation_devis_2.php">
						<table>
							<tr>
								<td>
									<input type="submit" value="Supprimer" name="supr_ok">
								</td>
								<td>
									<input type="submit" value="Retour">
								</td>
							</tr>
						</table>
					</form>
				<?php
				}
				else
				{
					if((isset($_POST['creer_modele'])))
					{
						echo "creer devis";
						//include('');
					}
					else
					{
						if((isset($_POST['create_pdf'])))
						{
						
							require('html2pdf/html2pdf.class.php');
							include('content.php');
							$html2pdf = new HTML2PDF('P', 'A4', 'en');
							$html2pdf->pdf->SetAuthor('LAST-NAME Frist-Name');
							$html2pdf->pdf->SetTitle('HTML2PDF Wiki Example');
							$html2pdf->pdf->SetSubject('HTML2PDF Wiki');
							$html2pdf->pdf->SetKeywords('HTML2PDF, TCPDF, example, wiki');
							$html2pdf->writeHTML($content_html);
							$html2pdf->Output('file.pdf');
							
							
							
							
						}
						else
							echo "cas impossible";
							//include('');
					}
				}
			}
		}
	}
	else
	{








	/*
	<tr>
	<td style="text-align:center; font-weight: bold;">
						<input id="submit" type="submit" value="Etape suivante" name="etape_suivante">
					</td>
				<td style="text-align:center; font-weight: bold;">
					<input id="submit" type="submit" value="Modifier le devis" name="modifier_devis">
				</td>
				<td style="text-align:center; font-weight: bold;">
					<input id="submit" type="submit" value="Supprimer le devis" name="suppr_devis">
				</td>
				<td style="text-align:center; font-weight: bold;">
					<input id="submit" type="submit" value="Creer un modele" name="creer_modele">
				</td>
				<td style="text-align:center; font-weight: bold;">
					<input id="submit" type="submit" value="Format PDF" name="create_pdf">
				</td>
			</tr>*/





		?>






		<form method="post" action="creation_devis_2.php">
			<table class="tab">
				<?php
				if (!empty($_POST['options']))
				{
					$stmt = $bdd->prepare("INSERT INTO donnee_modele (nom_modele, ref_produit) VALUES (:nom_modele, :ref_produit)");
					$stmt->bindParam(':nom_modele', $_SESSION['modele_name']);
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

							$donnee_modele =  $bdd->prepare('SELECT nom_modele FROM donnee_modele WHERE ref_produit = "'. $info_mod['prod_id'] .'" AND nom_modele = "'. $_SESSION['modele_name'] .'"');
							$donnee_modele->execute();
							if($affdon = $donnee_modele->fetch())
							{
								
							//CALCULE DE LA QTE, S/TOTAL ET TOTAL

							//QTE
							$QTE = 42;

							//S/TOTAL
							$sstotal = $QTE * $info_mod['puht'];

							//TOTAL
							$_SESSION['TOTAL_DEVIS'] += $sstotal;







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
										PU <br/>€ HT
									</th>
									<th>
										QTE
									</th>
									<th>
										PV <br/>€ HT
									</th>
									<th>
										S/TOTAL <br/>€ HT
									</th>
									<th>
										TOTAL <br/>€ HT
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
											echo '<p style="text-align:left;"><strong>'.$info_mod['famidescrip'].'</strong></p>';
										?>
									</td>
									<td>
									</td>
									<td>
									</td>
									<td>
									</td>
									<td>
									</td>
									<td>
										<?php
											echo $_SESSION['TOTAL_DEVIS'];
										?>
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
									<td>
									</td>
									<td>
										<?php
											echo $_SESSION['TOTAL_DEVIS'];
										?>
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
										echo $QTE;
									?>
								</td>
								<td>
									<?php
										echo $info_mod['puht'];
									?>
								</td>
								<td>
									<?php
										echo $sstotal;
									?>
								</td>
								<td>
								</td>
							</tr>
							<?php
						}
					}
				}
				?>
				<tr style="border-top: 1pt solid black;">
					<td>
					</td>
					<td style="text-align: left;">
						<?php
							echo "<strong>TOTAL €HT</strong>";
						?>
					</td>
					<td colspan="5" style="text-align:right;">
						<?php
							echo "<strong>" . $_SESSION['TOTAL_DEVIS'] . "</strong>";
						?>
					</td>
				 </tr>
				 <tr>
					<td>
					</td>
					<td style="text-align: left;">
						<?php
							echo "<strong>TVA à 20%</strong>";
						?>
					</td>
					<td colspan="5" style="text-align:right;">
						<?php
							echo "<strong>" . ($_SESSION['TOTAL_DEVIS']/100*20) . "</strong>";
						?>
					</td>
				 </tr>
				 <tr>
					<td>
					</td>
					<td style="text-align: left;">
						<?php
							echo "<strong>TOTAL €TTC</strong>";
						?>
					</td>
					<td colspan="5" style="text-align:right;">
						<?php
							echo "<strong>" . ($_SESSION['TOTAL_DEVIS']+($_SESSION['TOTAL_DEVIS']/100*20)) . "</strong>";
						?>
					</td>
				 </tr>
			</table>
			<table>
				<tr>
					<td style="text-align:center; font-weight: bold;">
						<input id="submit" type="submit" value="Etape suivante" name="etape_suivante">
					</td>
				</tr>
				<tr>
					<td style="text-align:center; font-weight: bold;">
						<input id="submit" type="submit" value="Modifier le devis" name="modifier_devis">
					</td>
					<td style="text-align:center; font-weight: bold;">
						<input id="submit" type="submit" value="Supprimer le devis" name="suppr_devis">
					</td>
					<td style="text-align:center; font-weight: bold;">
						<input id="submit" type="submit" value="Creer un modele" name="creer_modele">
					</td>
					<td style="text-align:center; font-weight: bold;">
						<input id="submit" type="submit" value="Format PDF" name="create_pdf">
					</td>
				</tr>
			</table>
		</form>
		</br>
		</br>
	<?php
	}
}
?>