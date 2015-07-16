<?php
function deco()
{
	session_destroy();
	$_SESSION['user_statut'] = 'visiteur';
	$_SESSION['user_name'] = '';
}
?>