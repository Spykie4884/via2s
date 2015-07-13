<?php
	session_start();
	
	
	
	
	if(!(isset($_SESSION['user_statut'])))
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=via2s;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
			//echo ("BDD pas connecté");
		}
		try
		{
			$Yaka = new PDO("sqlsrv:Server=192.168.100.5\SQLYAKA;Database=base_test_2015", "sa", "SecurityMaster08");
		}
		catch (Exception $e)
		{
			//echo 'Yaka pas connecté';
		}
		//$_SESSION['user_statut'] = 'visiteur';
		$_SESSION['user_statut'] = 'visiteur';
	}
	else
	{
		/*if($_SESSION['user_statut'] == 'visiteur')
			echo "vous êtes visiteurs";
		else
			if($_SESSION['user_statut'] == 'commercial')
				echo "vous êtes commercial";
			else
				if($_SESSION['user_statut'] == 'administrateur')
					echo "vous êtes administrateur";
				else
					if($_SESSION['user_statut'] == 'super-administrateur')
						echo "vous êtes super-administrateur";
					else
						echo "vous êtes personne";*/
	}
	
	setcookie('login', $_SESSION['user_statut'], time() + 365*24*3600, null, null, false, true);

	/*
	if (isset($_COOKIE['login']))
	{
		
		echo $_COOKIE["login"];
	}
	*/
?>