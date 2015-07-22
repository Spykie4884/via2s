<?php

/*
 __     __  ______   ______    ______    ______  
/  |   /  |/      | /      \  /      \  /      \ 
$$ |   $$ |$$$$$$/ /$$$$$$  |/$$$$$$  |/$$$$$$  |
$$ |   $$ |  $$ |  $$ |__$$ |$$____$$ |$$ \__$$/ 
$$  \ /$$/   $$ |  $$    $$ | /    $$/ $$      \ 
 $$  /$$/    $$ |  $$$$$$$$ |/$$$$$$/   $$$$$$  |
  $$ $$/    _$$ |_ $$ |  $$ |$$ |_____ /  \__$$ |
   $$$/    / $$   |$$ |  $$ |$$       |$$    $$/ 
    $/     $$$$$$/ $$/   $$/ $$$$$$$$/  $$$$$$/  

*/


//		   /\															   /\
//		  /	 \															  /	 \
//	     / II \				NECESSITE DE SE CONNECTER					 / II \		
//	    /  II  \			AU PREALABLE AUX BASES DE DONNEES			/  II  \
//	   /   II	\			DISPONIBLE DANS fun_BDD_connexion.php	   /   II	\
//	  /			 \													  /			 \
//	 /     ()	  \													 /     ()	  \
//	/______________\												/______________\

//VA CHERCHER LA FAMILLE ET SOUS-FAMILLE DE PRODUIT
function va_chercher($BASE, $TABLE, $ARG1, $ARG2)
{
	return $BASE->query('SELECT * FROM '. $TABLE .' WHERE '. $ARG1 .'="'. $ARG2 .'"');
}

//RETOURNE LE NOM DE LA FAMILLE
function sisi_la_famille($val_id)
{
	//nclude('fun_BDD_connexion.php');
	$Yaka = Yaka_connexion();
	//$la_famille = va_chercher('Yaka', 'famille', 'id', $val_id);
	$la_famille = $Yaka->query('SELECT * FROM famille WHERE id ="'. $val_id .'"');
	
	return $la_famille;
}
/*
function sisi_la_sous_famille($val_id)
{
	$la_famille = va_chercher($Yaka, $famille, 'id', $val_id)
	return $BASE->query('SELECT * FROM '. $TABLE .' WHERE '. $ARG1 .'="'. $ARG2 .'"');
}*/
?>