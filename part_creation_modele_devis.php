<?php
	$bdd = bdd_connexion();
	$Yaka = Yaka_connexion();
	if((isset($_POST['submit'])) && ($_POST['submit'] == 'OUI'))
	{
		echo 'plopnfyjhtyhdfh';
	}
	else
	{
		$_POST['submit'] = '';
	}
?>
<div id="content">
	<div id="content_item">
		<center>
			<h1>CREATION DE MODELES</h1>
		</center>
		<br/>
		<br/>
		<center>
			<h3>CREER UN NOUVEAU MODELE</h3>
			<form method="post" action="creation_modele_devis_2.php">
				<br>
				<table>
					<tr>
						<td style="text-align:right; font-weight: bold;">
							Nom du modele :
						</td>
						<td>
							<input type="text" name="modele_name" id="modele_name"/>
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td style="text-align:center; font-weight: bold;">
							<input id="submit" type="submit" value="Continuer" name="next">
						</td>
					</tr>
				</table>
			</form>
			<br/>
			<h3>CHOISIR UN MODELE EXISTANT</h3>
			<form method="post" action="creation_modele_devis_2.php">
				<tr>
					<td style="text-align:right; font-weight: bold;">
						Nom du modele :
					</td>
					<td>
						<select name="modele_name" id="modele_name" onchange='this.form.submit()'>
							<option value=" "></option>
							<?php
							$mod = $bdd->prepare('SELECT nom_modele FROM modele');
							$mod->execute(array(''));
							while($ret = $mod->fetch())
							{
								echo '<option value="' . $ret['nom_modele'] . '">' . $ret['nom_modele'] . '</option>';
							}
							?>
						</select>
						<noscript><input type="submit" value="Submit"></noscript>
					</td>
				</tr>
			</form>
		</center>
	</div>
</div>