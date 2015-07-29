<center>
	<form method="post" action="creer_modele_3.php">
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
						$Yaka = Yaka_connexion();
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
						$Yaka = Yaka_connexion();
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