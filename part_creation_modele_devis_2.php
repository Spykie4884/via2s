<?php
	include('fun_creation_modele.php');
?>
<div id="content">
	<div id="content_item">
		<center><h1>CREATION MODELE DEVIS</h1></center>
		<br/>
		<br/>
		<?php
		if((!isset($_POST['edit_modele_name']) ||  (isset($_POST['edit_modele_name']) && $_POST['edit_modele_name'] == ''))
			&& (!isset($_POST['modele_name']) || ($_POST['modele_name'] == '')))
		{
			echo '<center>
						Veuillez ajouter un nom de modèle avant de commencer le modèle de devis.
						<br/>
						<a href="creation_modele_devis.php">Ajouter un nom de modèle ici
					</center>';
		}
		else
		{
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
			if(isset($_POST['edit_modele_name']) && ($_POST['edit_modele_name'] == ''))
				echo 'wesh tu edit';
			else
			{
				if(!isset($_POST['edit_modele_name']) && ($_POST['modele_name'] == 'test'))
				{
					$requete = $bdd->query('SELECT * FROM modele WHERE nom_modele="' . $_POST['modele_name'] . '"');
					if($donneex = $requete->fetch())
					{
						if($donneex['nom_modele'] == $_POST['modele_name'])
							$_POST['edit_modele_name'] = $donneex['nom_modele'];
							$_POST['modele_name'] = $donneex['nom_modele'];
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
												<input id="submit" type="submit" value="OUI" name="oui">
											</td>
											<td style="text-align:center; font-weight: bold;">
												<input id="submit" type="submit" value="NON" name="non">
											</td>
										</tr>
									</table>
								</form>
							</center>
						<?php
						}
					}
				}
				else
				{
					$_POST['noni'] = 'YES';
				}
			}
		}
		?>
	</div>
</div>