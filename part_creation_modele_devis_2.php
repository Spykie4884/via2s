<?php
$bdd = bdd_connexion();
$Yaka = Yaka_connexion();
include('fun_creation_modele.php');
if(isset($_POST['modele_name']))
{
	$SESSION['modele_name'] = $_POST['modele_name'];
	echo $SESSION['modele_name'];
}

if(!isset($_POST['modele_name']) || ($_POST['modele_name'] == ''))
{
	//CAS OU AUCUN NOM N'EST ENTREE
	echo '<center>
				Veuillez ajouter un nom de modèle avant de commencer le modèle de devis.
				<br/>
				<a href="creation_modele_devis.php">Ajouter un nom de modèle ici
			</center>';
}
else
{
	if(!isset($_POST['edit_modele_name']))
	{
		$requete = $bdd->query('SELECT * FROM modele WHERE nom_modele="' . $SESSION['modele_name'] . '"');
		if($donneex = $requete->fetch())
		{
			if($donneex['nom_modele'] == $SESSION['modele_name'])
			{
			?>
				<center>
					Le nom de modele de devis existe déjà; voulez-vous le modifier?
					<br/>
					<form method="post" action="creation_modele_devis.php">
							<br>
						<table>
							<tr>
								<td>
									<input id="submit" type="submit" value="OUI" name="submit">
								</td> 
								<td style="text-align:center; font-weight: bold;">
									<input id="submit" type="submit" value="NON" name="submit">
								</td>
							</tr>
						</table>
					</form>
				</center>
			<?php
			}
		}
		else
		{
			include('part_creation_modele_devis_3.php');
		}
	}
	else
	{
		$_POST['noni'] = 'YES';
		include('form_creation_modele_devis.php');
	}
}
?>