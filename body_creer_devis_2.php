<?php
//include('fun_bdd_connexion.php');
//&& (isset($_POST['modele_exist']) && $_POST['modele_exist'] != "")
if((isset($_POST['devis_name']) || isset($_POST['devis_name_exist'])))
{
	$bdd = bdd_connexion();
	if(isset($_POST['devis_name']))
	{
		$_SESSION['devis_name'] = $_POST['devis_name'];
		$mod = $bdd->prepare('SELECT * FROM devis WHERE libelle="'.$_POST['devis_name'].'"');
		$mod->execute(array(''));
		if($ret = $mod->fetch())
		{
			?>
			<center>
				Le devis existe déjà; voulez-vous le modifier?
				<br/>
				<form method="post" action="creer_devis_3.php">
						<br>
					<table>
						<tr>
							<td>
								<input id="OUI" type="submit" value="OUI" name="OUI">
							</td> 
							<td style="text-align:center;">
								<input id="NON" type="submit" value="NON" name="NON">
							</td>
						</tr>
					</table>
				</form>
			</center>
			<?php
		}
		else
		{
			$_SESSION['devis_name'] = $_POST['devis_name'];
			$_SESSION['modele_name'] = $_POST['modele_exist'];
			?>
			<center>
				Voulez-vous créer le devis <?php echo $_POST['devis_name'];?> selon le modèle <?php echo $_POST['modele_exist'];?>?
				<br/>
				<form method="post" action="creer_devis_3.php">
						<br>
					<table>
						<tr>
							<td>
								<input id="OUI" type="submit" value="OUI" name="OUI">
							</td> 
							<td style="text-align:center;">
								<input id="NON" type="submit" value="NON" name="NON">
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
		if(isset($_POST['devis_name_exist']))
		{
			$_SESSION['devis_name'] = $_POST['devis_name_exist'];
			$mod = $bdd->prepare('SELECT * FROM devis WHERE libelle="'.$_POST['devis_name_exist'].'"');
			$mod->execute(array(''));
			if($ret = $mod->fetch())
			{
				?>
				<center>
					Le devis existe déjà; voulez-vous le modifier?
					<br/>
					<form method="post" action="creer_devis_3.php">
							<br>
						<table>
							<tr>
								<td>
									<input id="OUI" type="submit" value="OUI" name="OUI">
								</td> 
								<td style="text-align:center;">
									<input id="NON" type="submit" value="NON" name="NON">
								</td>
							</tr>
						</table>
					</form>
				</center>
				<?php
			}
			else
			{
				include('body_creer_devis_3.php');
			}
		}
		else
		{
			include('body_creer_devis.php');
		}
	}
}
else
{
	include('body_creer_devis.php');
}
?>