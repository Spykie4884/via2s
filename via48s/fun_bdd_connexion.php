<?php
function bdd_connexion()
{
	return new PDO('mysql:host=localhost;dbname=via2s;charset=utf8', 'root', '');
}
function Yaka_connexion()
{
	return new PDO("sqlsrv:Server=192.168.100.5\SQLYAKA;Database=base_test_2015", "sa", "SecurityMaster08");
}
?>