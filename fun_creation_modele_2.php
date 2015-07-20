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

function search_product($BASE, $TABLE, $ARG1, $ARG2)
{
	return $BASE->query('SELECT * FROM '. $TABLE .' WHERE '. $ARG1 .'="'. $ARG2 .'"');
}
?>