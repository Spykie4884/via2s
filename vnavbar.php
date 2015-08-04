<div class="col-sm-2" style="background-image: linear-gradient(to right, #2A71CE 0%, #4783D1 100%);">
	<div class="sidebar-nav" style="background-image: linear-gradient(to right, #2A71CE 0%, #4783D1 100%);">
		<div class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<span class="visible-xs navbar-brand" style='font-family: "Arial"; color: white;'>Menu</span>
			</div>
			<div class="navbar-collapse collapse sidebar-navbar-collapse" style="background-image: linear-gradient(to right, #2A71CE 0%, #4783D1 100%);">
				<ul class="nav navbar-nav" style="height: 100%;">
					<li class="index.php"><a href="index.php">Accueil</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Groupe <b class="glyphicon glyphicon-triangle-right"></b></a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li class="dropdown-submenu" style="color: white;">
								<a style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Le groupe</a>
								<ul class="dropdown-menu">
									<li><a href="organisation.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Organisation</a></li>
									<li><a href="bureaux.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Bureaux</a></li>
									<li><a href="partenaires.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Partenaires</a></li>
									<li><a href="emplois.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Emplois</a></li>
								</ul>
							</li>
							<li class="dropdown-submenu">
								<a href="#" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">VIA2S INTÉGRATION</a>
								<ul class="dropdown-menu">
									<li><a href="activite.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Activité</a></li>
									<li><a href="poles_activite.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Pôles d'activité</a></li>
									<li><a href="modele_vente.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Modèle de vente</a></li>
									<li><a href="mission_audit.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Mission d'audit</a></li>
									<li><a href="centre_de_formation.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Centre de formation</a></li>
									<li><a href="externalisation.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Externalisation</a></li>
									<li><a href="maintenance.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Maintenance</a></li>
									<li><a href="recherche_et_developpement.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">R&D </a></li>
								</ul>
							</li>
							<li class="dropdown-submenu">
								<a href="#" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">VIA2S DISTRIBUTION</a>
								<ul class="dropdown-menu">
									<li><a href="creer_devis.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Créer devis</a></li>
									<li><a href="liste_devis.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Devis</a></li>
									<li><a href="documentation.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Documentation</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Contact <b class="glyphicon glyphicon-triangle-right"></b></a>
						<ul class="dropdown-menu dropdown-menu-right" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">
							<li><a href="contact.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Contact</a></li>
							<li><a href="demande_adhesion.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Demande d'adhésion</a></li>
							<li><a href="plan_acces.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Plan d'accès</a></li>
						</ul>
					</li>
					<?php
					if(isset($_SESSION['co']) && $_SESSION['co'] == 1)
					{
						?>
						<li class="dropdown">
							<?php
							if($_SESSION['user_statut'] == 'client')
							{
							?>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion de compte <b class="glyphicon glyphicon-triangle-right"></b></a>
							<?php
							}
							else
							{
								?>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="glyphicon glyphicon-triangle-right"></b></a>
								<?php
							}
							?>
								<ul class="dropdown-menu dropdown-menu-right">
							<?php
							if($_SESSION['user_statut'] == 'super-administrateur')
							{
							?>
								<li><a href="tableau_de_bord.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Tableau de bord</a></li>
								<li class="dropdown-submenu">
									<a style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Compte</a>
									<ul class="dropdown-menu">
										<li><a href="creation_compte.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Créer</a></li>
										<li><a href="liste_contacts.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Contacts</a></li>
										<li><a href="recherche_contact.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Rechercher</a></li>
										<li><a href="historique.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Historique</a></li>
									</ul>
								</li>
							<?php
							}
							?>
							<li class="dropdown-submenu">
								<a style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Commande</a>
								<ul class="dropdown-menu">
									<li><a href="creer_devis.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Créer devis</a></li>
									<li><a href="liste_devis.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Liste devis</a></li>
									<?php
									if($_SESSION['user_statut'] == 'super-administrateur'
										|| $_SESSION['user_statut'] == 'administrateur'
										|| $_SESSION['user_statut'] == 'commercial')
									{
									?>
										<li><a href="#" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Commande</a></li>
										<li><a href="creer_modele.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Créer modèle</a></li>
									<?php
									}
									?>
									<li><a href="liste_modele.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Liste modèle</a></li>
									<?php
									if($_SESSION['user_statut'] == 'super-administrateur'
										|| $_SESSION['user_statut'] == 'administrateur'
										|| $_SESSION['user_statut'] == 'commercial')
									{
									?>
										<li><a href="modeles_prodil.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Modèles-Profil</a></li>
									<?php
									}
									?>
								</ul>
							</li>
							<?php
							if($_SESSION['user_statut'] == 'super-administrateur')
							{
							?>
							<li class="dropdown-submenu">
								<a style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Gestion</a>
								<ul class="dropdown-menu">
									<li><a href="gestion_produits.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Produits</a></li>
									<li><a href="gestion_niveaux.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Niveaux</a></li>
									<li><a href="gestion_familles.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Familles</a></li>
								</ul>
							</li>
							<?php
							}
							?>
							<li class="dropdown-submenu">
								<a style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Documentation</a>
								<ul class="dropdown-menu">
									<li><a href="ajouter_document.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Ajouter</a></li>
									<li><a href="rechercher_document.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Rechercher</a></li>
								</ul>
							</li>
							<?php
							if($_SESSION['user_statut'] == 'super-administrateur')
							{
							?>
							<li class="dropdown-submenu">
								<a style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Gestion site</a>
								<ul class="dropdown-menu">
									<li><a href="gestion_emplois.php" style="font-family: Arial Black,Arial Bold,Gadget,sans-serif; color: white;">Emplois</a></li>
								</ul>
							</li>
							<?php
							}
							?>
						  </ul>
						</li>
						<?php
					}
					?>
					<form class="navbar-form navbar-left" role="search" action="recherche.php">
						<div class="form-group"> 
							<input type="text" id="" class="form-control has-search-icon" placeholder="Rechercher" style="width: 100%">
						</div>
					</form>
					</ul>
			</div>
		</div>
	</div>
</div>