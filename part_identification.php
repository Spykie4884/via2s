<?php
//include('fun_BDD_recherche.php');
if( (isset($_POST['user_emaillog'])) && (isset($_POST['user_mdp'])) )
	{
		bdd_connexion();
		$requete = bdd_recherche_1($bdd, 'utilisateurs', 'user_email', $_POST['user_emaillog']);
		//$requete = $bdd->query('SELECT * FROM utilisateurs WHERE user_email="' . $_POST['user_emaillog'] . '"');
		$donneex = $requete->fetch();
		if((isset($_POST['user_emaillog'])) && (isset($_POST['user_mdp'])) && (($_POST['user_emaillog']) != '') && (($_POST['user_mdp']) != '')
		&& (($_POST['user_emaillog']) == $donneex['user_email']) && (($_POST['user_mdp']) == $donneex['user_mdp']))
		{
			$_SESSION['ref_client'] = $donneex['ref_client'];
			$_SESSION['user_name'] = $donneex['user_name'];
			$_SESSION['user_Fname'] = $donneex['user_Fname'];
			$_SESSION['user_societe'] = $donneex['user_societe'];
			$_SESSION['user_function'] = $donneex['user_function'];
			$_SESSION['user_phone'] = $donneex['user_phone'];
			$_SESSION['user_mobile'] = $donneex['user_mobile'];
			$_SESSION['user_fax'] = $donneex['user_fax'];
			$_SESSION['user_email'] = $donneex['user_email'];
			$_SESSION['user_address'] = $donneex['user_address'];
			$_SESSION['user_zipCode'] = $donneex['user_zipCode'];
			$_SESSION['user_city'] = $donneex['user_city'];
			$_SESSION['user_country'] = $donneex['user_country'];
			$_SESSION['user_statut'] = $donneex['user_statut'];
			$_SESSION['co'] = 1;
		}
		else
		{
		}
	}
?>
<div id="content">
	<div id="content_item">
		<center>
			<h1>IDENTIFICATION</h1>
			<img src="img/document.png"></img>
			<br/>
			<br/>
			<?php
				if((!(isset($_POST['user_email']))) && (!(isset($_POST['user_emaillog']))))
				{
					echo '<p style="color:red; font-weight: bold; text-align: center;">Le champ "Login" est mal renseigné!</p>';
				}
				if(!(isset($_POST['user_mdp'])))
				{
					echo '<p style="color:red; font-weight: bold; text-align: center;">Le champ "mot de passe" est mal renseigné!</p>';
				}
			?>

			<p>L'accès à cette rubrique nécessite un mot de passe. Veuillez donc vous identifier en indiquant votre adresse mail et ce mot de passe dans les cases ci-dessous.</p>
			<p>Si vous n'en avez pas, vous pouvez nous en faire la demande à partir de la page CONTACT.</p>
			<form method="post" action="identification.php">
				<table>
					<tr>
						<td style='width:200px;'>Login :</td>
						<td style='width:200;'>
							<input type="text" name="user_emaillog" size="15">
						</td>
					</tr>
					</br>
					<tr style='width:200;'>
						<td style='width:200px;'>Mot de passe :</td>
						<td>
							<input type="text" name="user_mdp" size="15">
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
							<input id="submit" type="submit" value="Connexion" name="valider">
						</td>
					</tr>
				</table>
				<p style="font-style: italic; color: blue">Mot de passe oublié ? <a href="forget_mdp.php">Cliquez ici.</a></p>
			</form>
		</center>
	</div>
</div>