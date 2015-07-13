<div id="menu_vertical">
	<ul>
		<?php
			include('fun_creation_modele.php');
			include('vmenu_admin.php');
		?>
	</ul>
</div>
<div id="content">
			<div id="content_item">
				<center><h1>CREATION DE MODELES</h1></center>
				<br/>
				<br/>
				<?php
				
				/* CONNEXION QUX BASES DE DONNEES */
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=via2s;charset=utf8', 'root', '');
					}
					catch (Exception $e)
					{
						//echo ("BDD pas connecté");
					}
					try
					{
						$Yaka = new PDO("sqlsrv:Server=192.168.100.5\SQLYAKA;Database=base_test_2015", "sa", "SecurityMaster08");
					}
					catch (Exception $e)
					{
						//echo 'Yaka pas connecté';
					}
				/*FIN DE CONNEXION AUX BASES DE DONNEES */
				
				/*VERIFICATION DE LA PRESENCE DE NOM DE MODELE*/
					if(isset($_POST['modele_name']))
					{
						$sth = $bdd->prepare("SELECT * FROM modele WHERE nom_modele='" . $_POST['modele_name'] . "'");
						$sth->execute();
						if($result = $sth->fetch())
						{
							echo 'Nom de modèle déjà pris';
							include('part_creation_modele_devis.php');
						}
						else
						{
							echo "<center><h3>Nom du modèle : ". $_POST['modele_name'] ."</h3></center>";
							$stmt = $bdd->prepare("INSERT INTO modele (nom_modele) VALUES (:name)");
							$stmt->execute(array("name" => $_POST['modele_name']));
							$name = $_POST['modele_name'];
							
							if(!empty($_POST['options']))
					{
						$modele_name = $name;
						$modele_name = $bdd->prepare("SELECT * FROM modele WHERE nom_modele='" . $_POST['modele_name'] . "'");
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
					?>
					<?php
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
										<form method="post" action="creation_modele_devis_2.php">
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
																?>
																<input type="checkbox" name="options[]" value="<?php echo $row['description']; ?>">
																<?php
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
																?>
																<input type="checkbox" name="options[]" value="<?php echo $row['description'];?>">
																<?php echo "</td>
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
									<td>
										<center>
											<input id="submit" type="submit" value="Ajouter" name="modele_name">
										</center>
									</td>
								</tbody>
						</table>
					</form>
				</center>
			</div>
		</div>
		<?php
			//}
		?>
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


		<div id="content">
			<div id="content_item">
				<br/>
				<br/>
				<center>
					<form method="post" action="creation_modele_devis_2.php">
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
				</center>
			</div>
		</div>
<?php
	//}
?>
						}
					}
					else
					{
						echo 'veuillez mettre un nom';
					}
				?>
		
				
				
				<!--Tableau modèle devis-->
				<?php
					