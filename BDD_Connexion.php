<?php
	if(!(isset($_SESSION['user_statut'])))
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
		}
		$_SESSION['user_statut'] = 'visiteur';
	}
?>