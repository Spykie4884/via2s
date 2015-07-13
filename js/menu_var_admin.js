/***********************************************************************************
*	(c) Ger Versluis 2000 version 5.411 24 December 2001 (updated Jan 31st, 2003 by Dynamic Drive for Opera7)
*	For info write to menus@burmees.nl		          *
*	You may remove all comments for faster loading	          *		
***********************************************************************************/



	
	var TailleCase=79;				// taille des cases du menu
	var TaillePetiteCase=69;
	var TailleDocumentation=95;
	var Racine='http://127.0.0.1';
	//var Racine='http://test.via2s.com';
	
function BeforeStart(){return}
function AfterBuild(){return}
function BeforeFirstOpen(){return}
function AfterCloseAll(){return}

// Menu tree
//	MenuX=new Array(Text to show, Link, background image (optional), number of sub elements, height, width);
//	For rollover images set "Text to show" to:  "rollover:Image1.jpg:Image2.jpg"

Menu1=new Array("Accueil",Racine+"/index.php","",0,20,69);

Menu2=new Array("Société","","",8,20,79);
	Menu2_1=new Array("Activité",Racine+"/societe/activite.php","",0,20,79);
	Menu2_2=new Array("Pôles d'activité",Racine+"/societe/poles_d_activites.php","",0,40,79);
	Menu2_3=new Array("Modèle de vente",Racine+"/societe/modele_de_vente.php","",0,40,79);
	Menu2_4=new Array("Partenaires",Racine+"/societe/partenaires.php","",0,20,79);
	Menu2_5=new Array("Organisation",Racine+"/societe/organisation.php","",0,20,79);	
	Menu2_6=new Array("Bureaux",Racine+"/societe/bureaux.php","",0,20,79);
	Menu2_7=new Array("Plan d'accès",Racine+"/societe/plan_acces.php","",0,20,79);
	Menu2_8=new Array("Plan d'accès",Racine+"/societe/plan_acces.php","",0,20,79);

Menu3=new Array("Services","","",5,20,95);
	Menu3_1=new Array("Mission d'audit",Racine+"/services/mission_d_audit.php","",0,20,95);
	Menu3_2=new Array("Centre de formation","","",3,40,95);
	Menu3_2_1=new Array("Présentation",Racine+"/services/centre_de_formation.php","",0,20,95);
	Menu3_2_2=new Array("Plan de formation",Racine+"/DCMTPVplan_de_formations.php","",0,40,95);
	Menu3_2_3=new Array("Support de cours",Racine+"/DCMTPVsupport_de_cours.php","",0,40,95);
	
	Menu3_3=new Array("Externalisation",Racine+"/services/externalisation.php","",0,20,95);
	Menu3_4=new Array("Maintenance",Racine+"/services/maintenance.php","",0,20,95);
	Menu3_5=new Array("R&D",Racine+"/services/recherche_developpement.php","",0,20,95);

Menu4=new Array("Documentation",Racine+"/documentation/documentation.php?tri=0","/connect_prive.php",0,20,295);

//Menu5=new Array("Commande","/commande.php","",0,20,TailleCase);
//Menu5=new Array("Commande","commande.php","",3,20,TailleCase);
//Menu5_1=new Array("Devis","connexDevis.php","",0,20,TailleCase);
//Menu5_2=new Array("Achat","connexAchat.php","",0,20,TailleCase);
//Menu5_3=new Array("Livraison","connexLivraison.php","",0,20,TailleCase);

Menu5=new Array("Compte",Racine+"/compte/compte.php","",0,20,79); 	

Menu6=new Array("Emplois","","",2,20,79);
	Menu6_1=new Array("Postes à pourvoir",Racine+"/emplois/postes_a_pourvoir.php","",0,40,79);
	Menu6_2=new Array("Stages",Racine+"/emplois/stages.php","",0,20,79);

Menu7=new Array("Commande","","",6,20,79);
	Menu7_1=new Array("créer devis",Racine+"/nonvalide/form_creation.php?devis=1","",0,20,79);
	Menu7_2=new Array("liste devis",Racine+"/nonvalide/form_liste_devis.php","",0,20,79);
	Menu7_3=new Array("commande",Racine+"/nonvalide/form_liste_devis.php?statut=2","",0,20,79);
	Menu7_4=new Array("créer modèle",Racine+"/nonvalide/form_creation.php?devis=0","",0,20,79);
	Menu7_5=new Array("liste modèle",Racine+"/nonvalide/form_liste_modele.php","",0,20,79);
	Menu7_6=new Array("historique",Racine+"/nonvalide/historique.php","",0,20,79);
	
	

Menu8=new Array("Contact",Racine+"/contact/contact.php","",0,20,79);

Menu9=new Array("Admin",Racine+"/admin/admin.php","",0,20,70);
