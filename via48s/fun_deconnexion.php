<?php
function deconnexion()
{
	$_SESSION['co'] = 0;
	$_SESSION['user_name'] = '';
	$_SESSION['user_Fname'] = '';
	$_SESSION['user_societe'] = '';
	$_SESSION['user_function'] = '';
	$_SESSION['user_phone'] = '';
	$_SESSION['user_mobile'] = '';
	$_SESSION['user_fax'] = '';
	$_SESSION['user_email'] = '';
	$_SESSION['user_address'] = '';
	$_SESSION['user_zipCode'] = '';
	$_SESSION['user_city'] = '';
	$_SESSION['user_country'] = '';
	$_SESSION['user_statut'] = '';
	$_SESSION['user_mdp'] = '';
	$_SESSION['user_date'] = '';
}