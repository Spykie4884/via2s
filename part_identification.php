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
							<input type="text" name="user_email" size="15">
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