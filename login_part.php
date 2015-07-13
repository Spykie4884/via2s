<?php
	/*
						>>>>>CONNEXION<<<<<
		Permet la connexion des membres du sites (client, commercial, administrateur
		super-administrateur).
	*/
	

	
	
	if( (isset($_POST['user_emaillog'])) && (isset($_POST['user_mdp'])) )
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=via2s;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
			echo ("BDD pas connecté");
		}
		try
		{
			$Yaka = new PDO("sqlsrv:Server=192.168.100.5\SQLYAKA;Database=base_test_2015", "sa", "SecurityMaster08");
		}
		catch (Exception $e)
		{
			echo 'Yaka pas connecté';
		}
		$requete = $bdd->query('SELECT * FROM utilisateurs WHERE user_email="' . $_POST['user_emaillog'] . '"');
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
			<!--<a href="javascript:getlink()">Se connecter</a>-->
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
	
	<?php
	include("ariane.php");
	?>