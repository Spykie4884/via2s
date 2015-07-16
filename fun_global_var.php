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

?>