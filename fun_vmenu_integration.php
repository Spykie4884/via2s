<?php
function vmenu_integration($page)
{
	if($page!="Activite")
		echo'<li><a href="activite.php">Activité</a></li>';
	else
		echo'<li>Activité ></li>';

	if($page!="poles_d_activites")
		echo'<li><a href="poles_d_activites.php">Pôles d\'activité</a></li>';
	else
		echo'<li>Pôles d\'activité ></li>';

	if($page!="modele_de_vente")
		echo'<li><a href="modele_de_vente.php">Modèle de vente</a></li>';
	else
		echo'<li>Modèle de vente ></li>';

	if($page!="mission_d_audit")
		echo'	<li><a href="mission_d_audit.php">Mission d\'audit</a></li>';
	else
		echo'<li>Mission d\'audit ></li>';

	if($page!="formation")
		echo'<li><a href="centre_de_formation.php">Centre de formation</a></li>';
	else
		echo'<li>Centre de formation ></li>';

	if($page!="externalisation")
		echo'<li><a href="externalisation.php">Externalisation</a></li>';
	else
		echo'<li>Externalisation ></li>';

	if($page!="maintenance")
		echo'<li><a href="maintenance.php">Maintenance</a></li>';
	else
		echo'<li>Maintenance ></li>';

	if($page!="rd")
		echo'<li><a href="recherche_developpement.php">R&D</a></li>';
	else
		echo'<li>R&D ></li>';
}
?>