<?php
$bdd = bdd_connexion();
$Yaka = Yaka_connexion();
//TABLEAU DU HAUT
?>
<center>
	<div class="tableau">
		<form method="post" action="creation_modele_devis_3.php">
			<table class="tab">
				<tr class="tete">
					<th class="debut">N°</th><th class="designation">
						Désignation
					</th>
					<th>
						PU € HT
					</th>
					<th>
						<input type="checkbox" name="check" value="cochez" onClick="checkUncheck(document.formCreer, document.formCreer.check)">
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
							//DESIGNATION
							echo 'designation';
						?>
					</td>
					<td>
						<?php
							//PRIX HT
							echo 42;
						?>
					</td>
					<td>
						<?php
							//CHOIX
						?>
						<input type="checkbox" name="options[]" value="modele_devis_choix">
						<br/>
					</td>
				</tr>
				<tr class="total_fin">
				</tr>
			</table>
		</form>
	</div>
</center>
<center><h1>Recherche produits</h1></center>
<br/>
<br/>

































<!--<center>
	<form method="post" action="creation_modele_devis_3.php">
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
						<option value=" "></option>
						<?php
						try
						{
							$Yaka = new PDO("sqlsrv:Server=192.168.100.5\SQLYAKA;Database=base_test_2015", "sa", "SecurityMaster08");
						}
						catch (Exception $e)
						{
							echo 'Yaka pas connecté';
						}
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
						<option value=" "></option>
						<?php
						try
						{
							$Yaka = new PDO("sqlsrv:Server=192.168.100.5\SQLYAKA;Database=base_test_2015", "sa", "SecurityMaster08");
						}
						catch (Exception $e)
						{
							echo 'Yaka pas connecté';
						}
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
		</table>
		<table>
			<tr>
				<td style="text-align:center; font-weight: bold;">
					<input id="submit" type="submit" value="rechercher produit" name="modele_name">
				</td>
			</tr>
		</table>
	</form>
</center>
-->