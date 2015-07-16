<?php
include('fun_BDD_recherche.php');
include('fun_login_part.php');
if( (isset($_POST['user_emaillog'])) && (isset($_POST['user_mdp'])) )
{
	$bdd = bdd_connexion();
	$requete = bdd_recherche_1($bdd, 'utilisateurs', 'user_email', $_POST['user_emaillog']);
	$donneex = $requete->fetch();
	if((isset($_POST['user_emaillog'])) && (isset($_POST['user_mdp'])) && (($_POST['user_emaillog']) != '') && (($_POST['user_mdp']) != '')
	&& (($_POST['user_emaillog']) == $donneex['user_email']) && (($_POST['user_mdp']) == $donneex['user_mdp']))
	{
		Success_connect($donneex);
	}
}
if($_SESSION['user_statut'] == 'visiteur')
{
?>

	<div class="login1">
		</br>
		<a>Connexion </a>
		<form id="post" method="post" action="identification.php" name="form1">
			Login :
			<input type="text" name="user_emaillog" onfocus="this.value=''">
			Mot de passe :
			<input type="password" name="user_mdp">
			<input type="hidden" name="supporttype" />
			<script type="text/javascript">
				function submitform()
				{
				document.forms["post"].submit();
				}
			</script>
			<a href="javascript: submitform()">Se connecter</a>
		</form>
	</div>
	
<?php
}
else
{
	?>
	<div class="login1">
		</br>
		
		<?php
			if((isset($_SESSION['co'])) && ($_SESSION['co'] == 1))
				echo "Bienvenue <a href='gestion_compte.php'>" . $_SESSION['user_name'] .
				"</a> | <a href='deconnexion.php'>Déconnexion</a>";
		?>
	</div>
	<?php
}
?>