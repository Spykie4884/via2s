<?php
	include('fun_creation_modele.php');
?>
<div id="content">
	<div id="content_item">
		<center><h1>CREATION MODELE DEVIS</h1></center>
		<br/>
		<br/>
		<?php
		if(!isset($_POST['modele_name']))
		{
			echo 'PAS DE POSTS MODELE NAME';
		}
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=via2s;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
		}
		try
		{
			$Yaka = new PDO("sqlsrv:Server=192.168.100.5\SQLYAKA;Database=base_test_2015", "sa", "SecurityMaster08");
		}
		catch (Exception $e)
		{
			//echo 'Yaka pas connecté';
		}
		if(!empty($_POST['options']))
		{
		?>
		<table class="cote" width="100%">
			<tr>
				<th class="entete">Réf</th>
				<th class="entete">Nom</th>
				<th class="entete">Prix à l'unité</th>
				<th class="entete">Famille</th>
				<th class="entete">Choisir</th>
			</tr>
			<?php
			foreach($_POST['options'] as $val)
			{
			?>
				<tr>
					<td>
						<?php
							echo $val.'<br/>';
						?>
					</td>
				</tr>
			<?php
			}
			?>
			</table>
		<?php
		}
		if (((isset($_POST['descrip'])) && ($_POST['descrip'] != ''))
			|| ((isset($_POST['reference_part_number'])) && ($_POST['reference_part_number'] != ''))
			|| ((isset($_POST['famille'])) && ($_POST['famille'] != ''))
			|| ((isset($_POST['niveau'])) && ($_POST['niveau'] != ''))
			|| ((isset($_POST['reference'])) &&($_POST['reference'] != '')))
		{
			$_POST['descrip'] != '';
			$_POST['reference_part_number'] != '';
			$_POST['reference'] != '';
			$_POST['famille'] != '';
			$_POST['niveau'] != '';
		?>
		<div id="content">
			<div id="content_item">
			<br/>
			<br/>
				<center>
				<form method="post" action="gestion_produits.php">
					<?php
					if (!$row = $recherche->fetch())
					{
						echo "Aucun produit n'a été trouvé.";
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
									<th class="entete">Choisir</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$color = 'pair';
								$fam = $Yaka->prepare('SELECT * FROM famille WHERE id = :idfam ');
								
								while($row = $recherche->fetch())
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
										echo "</td>
												</tr>";
										$color = 'pair';
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
					</form>
				</center>
			</div>
		</div>
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
		<form method="post" action="gestion_produits.php">
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
							<option value=""></option>
							<?php
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
							<option value=""></option>
							<?php
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
				<tr>
					<td style="text-align:center; font-weight: bold;">
						<input id="submit" type="submit" value="rechercher_produit" name="modele_name">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>