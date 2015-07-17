<?php

//MET LA VARIABLE SESSION A NULLE
function SESSION_zero()
{
	$_SESSION['nom']='';
	$_SESSION['prenom']='';
	$_SESSION['fonction']='';
	$_SESSION['mail']='';
	$_SESSION['tel_bureau']=0;
	$_SESSION['tel_mobile']=0;
	$_SESSION['fax']=0;
	$_SESSION['societe']='';
	$_SESSION['adresse']='';
	$_SESSION['code_postal']='';
	$_SESSION['ville']='';
	$_SESSION['pays']='';
	$_SESSION['mdp']='';
	$_SESSION['co']=0;
}

function POST_zero()
{
	$_POST['user_name']='';
	$_POST['user_Fname']='';
	$_POST['user_function']='';
	$_POST['user_societe']='';
	$_POST['user_phone']='';
	$_POST['user_mobile']='';
	$_POST['user_fax']='';
	$_POST['user_email']='';
	$_POST['user_address']='';
	$_POST['user_zipCode']='';
	$_POST['user_city']='';
	$_POST['user_country']='';
	$_POST['user_mdp']='';
	$_POST['user_mdprep']='';
}
?>