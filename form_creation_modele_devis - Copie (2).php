<?php
/*$affiches =  $Yaka->prepare('SELECT produit.description as pescr, famille.description as familledescript
						FROM produit, famille
						WHERE famille.id = produit.id_famille AND famille.id = '. $info_donnee_modele['ref_produit'] .'
						ORDER BY famille.description
						');*/
		/*$affiches =  $Yaka->prepare('SELECT produit.description, famille.description
						FROM produit, famille
						WHERE famille.id = produit.id_famille
						');*/
		//echo $info_donnee_modele['ref_produit'];
include('fun_creation_modele_3.php');

$tabvide = 0;
$compteur = 0;
$compteur2 = 0;
$compteur3 = 0;
?>
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
	if((isset($_SESSION['modele_name'])) && ($_SESSION['modele_name'] != ''))
	{
		$donnee_modele =  $bdd->prepare('SELECT * FROM donnee_modele WHERE nom_modele = "'. $_SESSION['modele_name'] .'"');
		$donnee_modele->execute();
		
		$affiches = $Yaka->prepare("SELECT produit.description as proddescrip, famille.description as famidescrip
										FROM produit, famille
										WHERE famille.id = produit.id_famille ORDER BY famidescrip");
		
		$affiches->execute();
		while($info_mod = $affiches->fetch())
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
							echo '<h4 style="text-align:left;">'.$info_mod['famidescrip'].'</h4>';
							//echo $prodinfo['description'];
						?>
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
							//echo $prodinfo['description'];
						?>
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
						//echo 'pasteque';
					?>
				</td>
				<td>
				</td>
			</tr>
			<?php
		}
	}
	?>
</table>