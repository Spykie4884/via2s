<?php
$bdd = bdd_connexion();
?>
<div id="content">
			<div id="content_item">
				<center>
					<h1>
						MODELE-PROFIL
					</h1>
				</center>
				<br/>
				<br/>
<?php
if(isset($_POST['OUI']))
{
	$sal = $bdd->prepare("INSERT INTO modele_profil (nom_modele, nom_client) VALUES ('".$_SESSION['client_modele']."','".$_SESSION['nom_client']."')");
	$sal->execute();
	echo "Lien effectué !";
}
else
{
	if((isset($_POST['client_modele'])) && (isset($_POST['client_name']))
		&& ($_POST['client_modele'] != ' ') && ($_POST['client_name'] != ' '))
	{
		$_SESSION['client_modele'] = $_POST['client_modele'];
		$_SESSION['nom_client'] = $_POST['client_name'];
		echo "Êtes-vous sûre de vouloir lier " . $_POST['client_name'] . " à " . $_POST['client_name'] . " ?";
		?>
			<form method="post" action="modele_profil.php">
				<table>
					<tr>
						<td style="text-align:center; font-weight: bold;">
							<input id="submit" type="submit" value="OUI" name="OUI">
						</td>
						<td style="text-align:center; font-weight: bold;">
							<input id="submit" type="submit" value="NON" name="NON">
						</td>
					</tr>
				</table>
			</form>
		<?php
	}
	else
	{
		$_POST['client_modele'] = ' ';
		$_POST['client_name'] = ' ';
		?>
		<center>
			<form method="post" action="modele_profil.php">
				<table class="tab" style="width:100%">
					<tr class="tete" style="width:100%">
						<th>
							Nom du modèle
						</th>
						<th>
							Nom du client
						</th>
					</tr>
					<tr style="width:100%">
						<td>
							<select name="client_modele" id="client_modele" style="width:80%">
								<option value=" "></option>
								<?php
									$ext = bdd_connexion();
									$nmodele = $bdd->prepare('SELECT nom_modele FROM modele');
									$nmodele->execute(array(''));
									while($liste_modele = $nmodele->fetch())
									{
										echo '<option value="' . $liste_modele['nom_modele'] . '">' . $liste_modele['nom_modele'] . '</option>';
									}
								?>
							</select>
						</td>
						<td>
							<select name="client_name" id="client_name" style="width:80%">
								<option value=" "></option>
								<?php
									$ext = bdd_connexion();
									$nmodele = $bdd->prepare('SELECT user_name FROM utilisateurs');
									$nmodele->execute(array(''));
									while($liste_modele = $nmodele->fetch())
									{
										echo '<option value="' . $liste_modele['user_name'] . '">' . $liste_modele['user_name'] . '</option>';
									}
								?>
							</select>
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td style="text-align:center; font-weight: bold;">
							<input id="submit" type="submit" value="Lier le client au modèle" name="modele_name">
						</td>
					</tr>
				</table>
			</form>
		</center>
		<?php
	}
}
?>
	</div>
</div>