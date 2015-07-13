<?php
	if(isset($_POST['Ancienmotdepasse'])
		&& isset($_POST['Nouveaumotdepasse'])
		&& isset($_POST['Confirmermotdepasse']))
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=via2s;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
			//echo ("BDD pas connecté");
		}
		$requete = $bdd->query('SELECT user_mdp FROM utilisateurs WHERE user_email="' .$_SESSION['user_email'] . '"');
		$donnee = $requete->fetch();
		$user_email=$_SESSION['user_email'];
		$user_mdp=$_POST['Nouveaumotdepasse'];
		if(($_POST['Ancienmotdepasse'] == $donnee['user_mdp']))
		{
			if($_POST['Nouveaumotdepasse'] == $_POST['Confirmermotdepasse'])
			{
				$sql = "UPDATE utilisateurs SET user_mdp=? WHERE user_email=?";
				$q = $bdd->prepare($sql);
				$q->execute(array($user_mdp,$user_email));
				$errconf = 0;
			}
			else
			{
				$errconf = 1;
			}
		}
		else
		{
			if($_POST['Ancienmotdepasse'] != $_SESSION['user_mdp'])
			{
				$errconf = 2;
			}
			else
			{
				echo "Erreur incompréhensible";
				$errconf = 1;
			}
		}
	}
	else
	{
		$errconf = 0;
	}
?>

<div id="content">
	<div id="content_item">
		<center><h1>MODIFIEZ VOTRE MOT DE PASSE</h1></center>
		<form method="post" action="form_modif_password.php" name="monform">
			<div class="pass_form">
				<table style="margin: 10px auto;">
					<tr>
						<td>Ancien mot de passe : </td>
						<td><input type="password" name="Ancienmotdepasse" size="58"></td>
					</tr>
					<tr>
						<td>Nouveau mot de passe : </td>
						<td><input type="password" name="Nouveaumotdepasse" size="58"></td>
					</tr>
					<tr>
						<td>Confirmation : </td>
						<td><input type="password" name="Confirmermotdepasse" size="58"></td>
					</tr>
				</table>
				<?php
					if($errconf == 1)
					{
						echo '<p style="text-align: center; color: red;">Veuillez saisir le même mot de passe dans les deux derniers champs</p>';
					}
					if($errconf == 2)
					{
						echo '<p style="text-align: center; color: red;">Ancien mot de passe pas correct</p>';
					}
				?>
				<p style="text-align: center;"><input id="Submit1" type="submit" value="Enregistrer" name="Enregistrer"></p>
			</div>
		</form>
		<form action="gestion_compte.php" method="post">
			<p style="text-align: center;"><input name="Retour" type="submit" value="Retour"></p>
		</form>
	</div>
</div>