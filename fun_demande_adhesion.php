<?php

//		   /\															   /\
//		  /	 \															  /	 \
//	     / II \				NECESSITE DE SE CONNECTER					 / II \		
//	    /  II  \			AU PREALABLE AUX BASES DE DONNEES			/  II  \
//	   /   II	\			DISPONIBLE DANS fun_BDD_connexion.php	   /   II	\
//	  /			 \													  /			 \
//	 /     ()	  \													 /     ()	  \
//	/______________\												/______________\



// Selectionne TOUT dans la base $BASE, dans la table $TABLE,
// sans argument
// RETOURNE LA REQUETTE
/*function bdd_recherche_tout($BASE, $TABLE)
{
	return $BASE->query('SELECT * FROM'. $TABLE .'');
}*/

// Selectionne TOUT dans la base $BASE, dans la table $TABLE,
// quand $ARG1 = $ARG2
// RETOURNE LA REQUETTE
function Success_connect($donneex)
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
?>