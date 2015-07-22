<?php
if(isset($_POST['valid_devis']))
{
	if(isset($_POST['devis_nom']))
	{
		$_SESSION['devis_nom'] = $_POST['devis_nom'];
		include('part_creation_devis_2.php');
	}
	else
	{
		include('part_creation_devis_2.php');
	}
}
else
{
?>
	<div id="content">
		<div class="content_item">
			<?php
			$bdd = bdd_connexion();
			$Yaka = Yaka_connexion();
			if(isset($_POST['client_modele']) && isset($_POST['nom_nom_devis']) && $_POST['client_modele'] != ' ' && $_POST['nom_nom_devis'] != '')
			{
				include('form_creation_devis.php');
			}
			else
			{
				if(isset($_POST['nom_nom_devis']))
				{
					echo '<h4 style="color:red;">Veuillez entrer un nom</h4>';
				}
			?>
				<form method="post" action="creation_devis.php">
				<?php
					echo 'Nom du devis : <input type="text" name="nom_nom_devis" id="nom_nom_devis" /><br/>';
					if(isset($_POST['client_modele']) && ($_POST['client_modele']==' '))
					{
						echo '<h4 style="color:red;">Veuillez séléctionner un modèle</h4>';
					}
					else
					{
						$_POST['client_modele']=' ';
					}
					?>
					<p>
						<label for="model">Seléctionnez un modèle sur lequel votre devis sera basé : </label>
						<select name="client_modele" id="client_modele" style="">
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
						<input id="submit" type="submit" value="Seléctionner" name="select">
					</p>
				</form>
				<?php
			}
			?>
		</div>
	</div>
<?php
}
?>