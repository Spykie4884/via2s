<?php
//include('fun_bdd_connexion.php');
if(isset($_POST['modele_name']) || isset($_POST['modele_name_exist']))
{
	$bdd = bdd_connexion();
	if(isset($_POST['modele_name']))
	{
		$_SESSION['modele_name'] = $_POST['modele_name'];
		$mod = $bdd->prepare('SELECT * FROM modele WHERE nom_modele="'.$_POST['modele_name'].'"');
		$mod->execute(array(''));
		if($ret = $mod->fetch())
		{
			?>
			<center>
				Le nom de modele de devis existe déjà; voulez-vous le modifier?
				<br/>
				<form method="post" action="creer_modele_3.php">
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
			$_SESSION['modele_name'] = $_POST['modele_name'];
			?>
			<center>
				Voulez-vous créer le devis <?php echo $_POST['modele_name'];?>?
				<br/>
				<form method="post" action="creer_modele_3.php">
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
		if(isset($_POST['modele_name_exist']))
		{
			$_SESSION['modele_name'] = $_POST['modele_name_exist'];
			$mod = $bdd->prepare('SELECT * FROM modele WHERE nom_modele="'.$_POST['modele_name_exist'].'"');
			$mod->execute(array(''));
			if($ret = $mod->fetch())
			{
				?>
				<center>
					Le nom de modele de devis existe déjà; voulez-vous le modifier?
					<br/>
					<form method="post" action="creer_modele_3.php">
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
				include('body_creer_modele_3.php');
			}
		}
		else
		{
			include('body_creer_modele.php');
		}
	}
}
else
{
	include('body_creer_modele.php');
}
?>