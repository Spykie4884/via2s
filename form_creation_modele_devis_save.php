<?php
include('fun_creation_modele_3.php');

$tabvide = 0;
$compteur = 0;
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
					/*
					$prodinfos =  $Yaka->prepare('SELECT * FROM produit WHERE id = :id');
					$prodinfos->execute(array(':id' => $checkU));
					$prodinfo = $prodinfos->fetch();
					*/
				}
			}
			if((isset($_SESSION['modele_name'])) && ($_SESSION['modele_name'] != ''))
			{
				$sql =  'SELECT * FROM donnee_modele WHERE nom_modele = "'. $_SESSION['modele_name'] .'"';
				//$donnee_modele =  $bdd->prepare($sql);
				//$info_donnee_modele = $donnee_modele->fetch();

				$prodinfos =  $Yaka->prepare('SELECT * FROM produit WHERE id = :id');
				$prodinfo = $prodinfos->fetch();
				$donnee_modele =  $bdd->prepare('SELECT * FROM donnee_modele WHERE nom_modele = ?');
				$donnee_modele->execute(array($_SESSION['modele_name']));
				foreach  ($bdd->query($sql) as $row)
				{
					
					$info_donnee_modele = $donnee_modele->fetch();
					$prodinfos->execute(array(':id' => $info_donnee_modele['ref_produit']));
					$prodinfo = $prodinfos->fetch();
					if($tabvide == 0)
					{
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
						$tabvide = 1;
					}
					?>
					<tr>
						<td>
							<?php echo $compteur; ?>
						</td>
						<td>
							<?php
								$fami = sisi_la_famille('5');
								echo $fami;
							//echo $prodinfo['description']; ?>
						</td>
						<td>
							<?php echo $prodinfo['prix_publique']; ?>
						</td>
					</tr>
				<?php
				}
			}
			?>
		</table>
		<br/>
		<br/>