<div id="menu_vertical">
	<ul>
		<?php
			include('fun_creation_contact.php');
			include('vmenu_admin.php');
		?>
	</ul>
</div>
<div id="content">
	<div id="content_item">
		<center><h1>Liste de devis</h1></center>
		<br/>
		<br/>
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
			$Yaka->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (Exception $e)
		{
			echo 'Yaka pas connecté';
		}
	if (((isset($_POST['descrip'])) && ($_POST['descrip'] != ''))
		|| ((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != ''))
		|| ((isset($_POST['prix_publique'])) && ($_POST['prix_publique'] != ''))
		|| ((isset($_POST['prix_unitaire'])) && ($_POST['prix_unitaire'] != ''))
		|| ((isset($_POST['reference'])) &&($_POST['reference'] != '')))
	{
		
		$recherche = $Yaka->prepare('SELECT * FROM produit WHERE description LIKE :descrip');
		$recherche->execute(array(':descrip' => $_POST['descrip'] . '%'));
?>
		<center><h3>RECHERCHE DE PRODUITS</h3></center>
		<br/>
		<br/>
		<center>
		<?php
		if (!$row = $recherche->fetch())
		{
			echo 'YA RIEN';
		}
		else
		{
		?>
		<table class="cote" width="100%">
		   <thead>
			   <tr>
				   <th class="entete">Réf</th>
				   <th class="entete">Nom</th>
				   <th class="entete">Prix à l'unité</th>
				   <th class="entete">Famille</th>
				   <th class="entete">Editer</th>
				   <th class="entete">Supprimer</th>
			   </tr>
		   </thead>
			<?php
				$color = 'pair';
				$fam = $Yaka->prepare('SELECT * FROM famille WHERE id = :idfam ');
				
				while($row = $recherche->fetch())
				{
					$fam->execute(array(':idfam' => $row['id_famille']));
					$ret = $fam->fetch();
					if($color == 'pair')
					{
						
						echo "<tbody>
								<tr class='pair'>
									<td width='100'><span class='casual'>" . $row['reference_part_number'] . "</span></td>
									<td align='left'>" . $row['description'] . "</td>
									<td width='100'>" . $row['prix_publique'] . "</td>
									<td width='100'>" . $ret['description'] . "</td>
									<td width='50'>" . "editer" . "</td>
									<td width='50'>" . "supprimer" . "</td>
								</tr>";
						$color = 'impaire';
					}
					else
					{
						echo "<tbody>
								<tr class='impaire'>
									<td width='100'><span class='casual'>" . $row['reference_part_number'] . "</span></td>
									<td align='left'>" . $row['description'] . "</td>
									<td width='100'>" . $row['prix_publique'] . "</td>
									<td width='100'>" . $ret['description'] . "</td>
									<td width='50'>" . "editer" . "</td>
									<td width='50'>" . "supprimer" . "</td>
								</tr>";
						$color = 'pair';
					}
				}
			   ?>
		   </tbody>
		</table>
<?php
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
?>


<div id="content">
	<div id="content_item">
		<center><h3>Liste de devis</h3></center>
		<br/>
		<br/>
		<center>
			<form method="post" action="gestion_produits.php">
				<br>
				<table>
					<tr>
						<td style="text-align:right; font-weight: bold;">
							Nom du devis :
						</td>
						<td>
							<input type="text" name="descrip" id="descrip" />
						</td>
					</tr>
					<tr>
						<td style="text-align:right; font-weight: bold;">
							Date du devis :
						</td>
						<td>
							<input type="text" name="reference_part_number" id="reference_part_number" />
						</td>
					</tr>
					<tr>
						<td style="text-align:center; font-weight: bold;">
							<input id="submit" type="submit" value="rechercher_produit" name="rechercher_produit">
						</td>
					</tr>
				</table>
			</form>
		</center>
<div id="content">
	<div id="content_item">
		<center><a href='ajout_produits.php'>Ajout de produits</a></center>
	</div>
</div>
<?php
	//}
?>
	</div>
</div>