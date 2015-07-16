<?php
function bdd_connexion()
{
	try
	{
		return new PDO('mysql:host=localhost;dbname=via2s;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		echo ("BDD pas connecté");
	}
}
function Yaka_connexion()
{
	try
	{
		return new PDO("sqlsrv:Server=192.168.100.5\SQLYAKA;Database=base_test_2015", "sa", "SecurityMaster08");
	}
	catch (Exception $e)
	{
		echo 'Yaka pas connecté';
	}
}
?>