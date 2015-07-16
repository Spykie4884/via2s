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


// Selectionne TOUT dans la base $BASE, dans la table $TABLE,
// sans argument
// RETOURNE LA REQUETTE
function bdd_id_all($BASE, $TABLE)
{
	return $BASE->query('SELECT * FROM '. $TABLE .'');
}

// Selectionne TOUT dans la base $BASE, dans la table $TABLE,
// quand $ARG1 = $ARG2
// RETOURNE LA REQUETTE
function bdd_id_1($BASE, $TABLE, $ARG1, $ARG2)
{
	return $BASE->query('SELECT * FROM '. $TABLE .' WHERE '. $ARG1 .'="'. $ARG2 .'"');
}
?>