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
}
catch (Exception $e)
{
	echo 'Yaka pas connecté';
}
if((isset($_POST['description'])))
{
	$public_price = floatval(preg_replace("/[^-0-9\.]/",".",$_POST['prix_public']));
	
	$product_register = $Yaka->prepare('INSERT INTO produit(
		id_famille, description, reference_part_number, prix_publique, reference
		) VALUES(
		:id_famille, :description, :reference_part_number, :prix_publique, :reference
		)');
	$product_register->execute(array(
		':id_famille' => ($_POST['famille']),
		':description' => ($_POST['description']),
		':reference_part_number' => ($_POST['reference_part_number']),
		':prix_publique' => $public_price,
		':reference' => ($_POST['reference'])
	));
}
?>
<div id="content">
	<div id="content_item">
		<center><h1>AJOUT DE PRODUITS</h1></center>
		<br/>
		<br/>
		<center>
			<form method="post" action="ajout_produits.php">
				<br>
				<table>
					<tr>
						<td style="text-align:right; font-weight: bold;">
							Nom du produit :
						</td>
						<td>
							<input type="text" name="description" id="description" />
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
								<option value=''></option>
								<?php
									$fami = $Yaka->prepare('SELECT id, description FROM famille');
									$fami->execute(array(''));
									while($ret = $fami->fetch())
									{
										echo '<option value=' . $ret['id']  .'>' . $ret['description'] . '</option>';
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
								<?php
									$fami = $Yaka->prepare('SELECT id, description FROM sous_famille');
									$fami->execute(array(''));
									while($ret = $fami->fetch())
									{
										echo '<option value=' . $ret['id']  .'>' . $ret['description'] . '</option>';
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td style="text-align:right; font-weight: bold;">
							Prix distributeur :
						</td>
						<td>
							<input type="text" name="prix_public" id="prix_public" />
						</td>
					</tr>
					<!--<tr>
						<td style="text-align:right; font-weight: bold;">
							Prix moyen constaté :
						</td>
						<td>
							<input type="text" name="prix_moyen_constate" id="prix_moyen_constate" />
						</td>
					</tr>-->
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
							<input id="submit" type="submit" value="ajouter_produit" name="ajouter_produit">
						</td>
					</tr>
				</table>
			</form>
		</center>
	</div>
</div>