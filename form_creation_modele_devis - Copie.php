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
			/*
			$prodinfos =  $Yaka->prepare('SELECT * FROM produit WHERE id = :id');
			$prodinfos->execute(array(':id' => $checkU));
			$prodinfo = $prodinfos->fetch();
			*/
		}
	}
	if((isset($_SESSION['modele_name'])) && ($_SESSION['modele_name'] != ''))
	{
		$donnee_modele =  $bdd->prepare('SELECT * FROM donnee_modele WHERE nom_modele = "'. $_SESSION['modele_name'] .'"');
		$donnee_modele->execute();
		/*$info_mod = $donnee_modele->fetch();
		echo $info_mod['ref_produit'];*/



		/*$affiches = $Yaka->prepare("SELECT produit.description, famille.description
									FROM produit, famille
									WHERE famille.id = produit.id_famille
										AND famille.id = :5
									ORDER BY famille.description");*/
		$affiches = $Yaka->prepare('SELECT p.description as pescr, f.description as familledescript, d.nom_modele as nom_modele, d.ref_produit
						FROM produit p, famille f, donnee_modele d WHERE d.nom_modele = nom_modele AND famille.id = p.id_famille AND f.id = 5 ORDER BY famille.description');
		/*$sql = "SELECT item_text
			FROM lists
			LEFT JOIN items
			USING (list_id)
			WHERE user_id = ?";*/
		$affiches->execute();
		$info_mod = $affiches->fetch();
		echo $info_mod['description'];
/*
		$tmp = 2;
		while($info_mod = $donnee_modele->fetch())
		{
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
			$descrp_affiche = $affiches->fetch();
			/*if($tmp == 2)
			{
				$descrp_affiche = $affiches->fetch();
				//$past = $descrp_affiche;
				$tmp = 1;
			}
			else
			{
				$descrp_affiche = $affiches->fetch();
			}*//*
			?>
			<tr>
				<td>
					<?php echo $compteur.'.'.$compteur2.'.'.$compteur3; ?>
				</td>
				<td>
					<?php
						echo $descrp_affiche['pdescr'];
					?>
				</td>
				<td>
				</td>
			</tr>
			<?php
		}
	}/*
?>
</table>	
		
		
		
		
		
		
		
		
		
		
		
		
		<?php
		/*$sql = 'SELECT * FROM donnee_modele WHERE nom_modele = "'. $_SESSION['modele_name'] .'"';
		$donnee_modele =  $bdd->prepare('SELECT * FROM donnee_modele WHERE nom_modele = "'. $_SESSION['modele_name'] .'"');
		$donnee_modele->execute();
		$bordel = 6;*/
		/*$affiches =  $Yaka->prepare('SELECT p.description as pescr, f.description as familledescript, d.nom_modele as nom_modele, d.ref_produit
						FROM produit p, famille f, donnee_modele d WHERE d.nom_modele = nom_modele AND famille.id = p.id_famille AND f.id = '. $bordel .' ORDER BY famille.description');*/
		/*$affiches =  $Yaka->prepare('SELECT produit.description as pescr, famille.description as familledescript
						FROM produit, famille
						WHERE famille.id = produit.id_famille AND famille.id = '. $bordel .'
						ORDER BY famille.description
						');
		$affiches->execute();
		
		$tmp = 0;*/
		/*foreach ($bdd->query($sql) as $row)
		{
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
			if($tmp == 0)
			{
				$rrrt = $affiches->fetch();
				$past = $rrrt;
				$tmp = 1;
			}
			else
			{
				$rrrt = $affiches->fetch();
			}
			?>
			<tr>
				<td>
					<?php echo $compteur; ?>
				</td>
				<td>
					<?php
					if(($past['familledescript'] == $rrrt['familledescript']) && ($tmp == 1))
					{
						$compteur++;
						echo '<h4 style="text-align:left;">'. $rrrt['familledescript'] .'</h4>';
						//echo $rrrt['familledescript'];
						$tmp = 2;
					}
						//echo $prodinfo['description'];
						//echo $affiche['produit.description'];
						echo $rrrt['pescr'];
					?>
				</td>
				<td>
					<?php //echo $prodinfo['prix_publique']; ?>
				</td>
			</tr>
			<?php
		}*//*
	}
	?>
</table>
<br/>
<br/>*/