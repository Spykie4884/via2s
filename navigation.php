
<?php
$page=str_ireplace("VIA2S - ","",$titre);
if($page=="Accueil")
	return;

$navigation='<p id="navigation" >';
	$navigation=$navigation.'<br /><a href="'.RACINE.'index.php" style="text-decoration: none; color:#0863CE ;">Accueil</a> > ';
switch($page)
{

case'Activit&eacute':
	case 'P&ocirc;les d\'activit&eacute':
		case 'Mod&eacute;le de vente':
			case 'Mission d\'audit':
				case 'Centre de formation':
				case 'Externalisation':
				case 'Maintenance':
					case 'Rechercher &amp; Developpement':

	$navigation=$navigation.'<a href="'.RACINE.'groupe/integration.php" style="text-decoration: none; color:#0863CE ;">Intégration</a> > ';

	break;



case 'Bureaux':
case 'Organisation':
case 'Emplois':
case 'Partenaires':

	$navigation=$navigation.'<a href="'.RACINE.'groupe/groupe.php" style="text-decoration: none; color:#0863CE ;">Groupe</a> > ';

	break;
		case 'Ingenieur Etude et  Développement':
	case 'Technicien d\'exploitation':
		$navigation=$navigation.'<a href="'.RACINE.'groupe/groupe.php" style="text-decoration: none; color:#0863CE ;">Groupe</a> > <a href="'.RACINE.'emplois/emplois.php" style="text-decoration: none; color:#0863CE ;">Emplois</a> > ';



	break;


case 'Plan d\'acc&egrave;s':

	$navigation=$navigation.'<a href="'.RACINE.'contact/form_ajout_contact.php" style="text-decoration: none; color:#0863CE ;">Contact</a> > ';

	break;




case 'Gestion des produits':
case 'Liste des Devis':
	case 'Liste des commande':
	case 'Modèles':
	case	'Niveau Famille':
	$navigation=$navigation.'<a href="'.RACINE.'groupe/distribution.php" style="text-decoration: none; color:#0863CE ;">Distribution</a> > ';

	break;

case 'Détails Devis':
case 'Modifier Devis':
	$navigation=$navigation.'<a href="'.RACINE.'groupe/distribution.php" style="text-decoration: none; color:#0863CE ;">Distribution</a> ><a href="'.RACINE.'commande/form_liste_devis.php" style="text-decoration: none; color:#0863CE ;"> Liste des Devis</a> >';

	break;





case 'Créer Modèle':
	case 'Détails Modèle':
		$navigation=$navigation.'<a href="'.RACINE.'groupe/distribution.php" style="text-decoration: none; color:#0863CE ;">Distribution</a> ><a href="'.RACINE.'commande/form_liste_modele.php" style="text-decoration: none; color:#0863CE ;"> Modèles</a> >';


		break;
			case 'Recherche Documentation':

				$navigation=$navigation.'<a href="'.RACINE.'groupe/distribution.php" style="text-decoration: none; color:#0863CE ;">Distribution</a> > ';

				break;




				case 'List Documentation':
					$navigation=$navigation.'<a href="'.RACINE.'groupe/distribution.php" style="text-decoration: none; color:#0863CE ;">Distribution</a> ><a href="'.RACINE.'documentation/form_doc_avance.php" style="text-decoration: none; color:#0863CE ;">Documentation</a> > ';

					break;


				case 'Contacts en attente':
				case 'Ajout contact':
				case 'Profils':
case 'Modèles et utilisateurs':
	case 'Historique Commande':
		case 'Historique Compte':
		case 'Historique':


				case 'Détails d\'un profil':
		case 'Modification d\'un Profil':
							case 'Modification du mot de passe':
						case 'Détails Attente':
						case 'Modifier les informations':
						case 'Rechercher un profil':
							case 'Créer devis':

				case 'Ajout documentation':
				case 'Ajout de produits':
				case 'Edition de produit':






		$navigation=$navigation.'<a href="'.RACINE.'admin/admin.php" style="text-decoration: none; color:#0863CE ;"> Administration</a> >';
	break;




}

$navigation=$navigation. $page.'</p>';
echo $navigation;
?>