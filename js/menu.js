/* Script d'affichage du 2�me niveau du menu
	Au survol du menu, on d�termine la sous-liste correspondante et on passe son display a block
	Au sortir de la zone de menu(g�n�ral), on masque le sous-menu
 */
 
 function afficherSousMenu(id){
	/*
	document.getElementById("sousmenu-accueil").style.display = "none";
	document.getElementById("sousmenu-societe").style.display = "none";
	document.getElementById("sousmenu-services").style.display = "none";
	document.getElementById("sousmenu-emploi").style.display = "none";
	document.getElementById("sousmenu-devis").style.display = "none";*/
	document.getElementById("sousmenu-groupe").style.display = "none";
	document.getElementById("sousmenu-contact").style.display = "none";
	document.getElementById(id).style.display = "block";
 }
 
 function masquerSousMenu(id){
	document.getElementById(id).style.display = "none";
 }