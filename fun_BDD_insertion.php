<?php

//		   /\															   /\
//		  /	 \															  /	 \
//	     / II \				NECESSITE DE SE CONNECTER					 / II \		
//	    /  II  \			AU PREALABLE AUX BASES DE DONNEES			/  II  \
//	   /   II	\			DISPONIBLE DANS fun_BDD_connexion.php	   /   II	\
//	  /			 \													  /			 \
//	 /     ()	  \													 /     ()	  \
//	/______________\												/______________\


/*
// Prépare l'insertion d'un élément à la place $PLACE
// dans la base $BASE, dans la table $TABLE,
// RETOURNE LA PREPARATION AVEC VARIABLE ELT!
function prepare_bdd_insert_un_elt($PLACE, $BASE, $TABLE)
{
	return $BASE->prepare('INSERT INTO '. $TABLE .'(
			$PLACE) VALUES(
			:elt)');
}

// Insert un élément $ELT à la place $PLACE
// dans la base $BASE, dans la table $TABLE,
// RETOURNE LA REQUETE
function prepare_bdd_insert_un_elt($ELT, $PLACE, $BASE, $TABLE)
{
	prepare_bdd_insert_un_elt($PLACE, $BASE, $TABLE);
	return $BASE->execute(array(':elt' => ($ELT)));
}
*/


// Prépare l'insertion de 5 éléments à la place $PLACE
// dans la base $BASE, dans la table $TABLE,
// RETOURNE LA PREPARATION AVEC VARIABLE ELT!
function prepare_bdd_insert_un_elt($PLACE, $BASE, $TABLE)
{
	return $BASE->prepare('INSERT INTO produit(
				ARG1, ARG2, ARG3, ARG4, ARG5
				) VALUES(
				:ARG1, :ARG2, :ARG3, :ARG4, :ARG5
				)');
}

// Insert un élément $ELT à la place $PLACE
// dans la base $BASE, dans la table $TABLE,
// RETOURNE LA REQUETE
function prepare_bdd_insert_5_elts($BASE, $TABLE, $PLACE, $ARG1, $ARG2, $ARG3, $ARG4, $ARG5)
{
	$tmp = $BASE->prepare('INSERT INTO produit(
				ARG1, ARG2, ARG3, ARG4, ARG5
				) VALUES(
				:ARG1, :ARG2, :ARG3, :ARG4, :ARG5
				)');
	$tmp->execute(array(
				':ARG1' => $ARG1,
				':ARG2' => $ARG2,
				':ARG3' => $ARG3,
				':ARG4' => $ARG4,
				':ARG5' => $ARG5
			));
}




// Selectionne TOUT dans la base $BASE, dans la table $TABLE,
// quand $ARG1 = $ARG2
// RETOURNE LA REQUETTE
function bdd_recherche_1($BASE, $TABLE, $ARG1, $ARG2)
{
	return $BASE->query('SELECT * FROM '. $TABLE .' WHERE'. $ARG1 .'="'. $ARG2 .'"');
}
?>