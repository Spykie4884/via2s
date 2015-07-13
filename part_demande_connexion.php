<?php
	include('vmenu_distribution.php');
	if((isset($_SESSION['co'])) && ($_SESSION['co'] == 1))
	{
		echo 'Vous êtes déjà connecté';
	}
	else
	{
		if((isset($_SESSION['co'])) && ($_SESSION['co'] == 42))
		{
			header('Location:identification.php');
			exit();
		}
		{
?>
		<div id="content">
			<div id="content_item">
				<center>
					<h1>Connexion requise</h1>
				</center>
				<div class="login2">
					</br>
					<form method="post" action="demande_connexion.php" name="form1">
						Login :
						<input type="text" name="user_emaillog" onfocus="this.value=''">
						Mot de passe :
						<input type="password" name="user_mdp">
						<input type="hidden" name="supporttype" />
						<a href="javascript:getlink()">Se connecter</a>
					</form>
				</div>
			</div>
		</div>
<?php
		}
	}
?>