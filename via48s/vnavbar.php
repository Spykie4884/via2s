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
							<li class="dropdown-submenu">
								<a>Le groupe</a>
								<ul class="dropdown-menu">
									<li><a href="organisation.php">Organisation</a></li>
									<li><a href="bureaux.php">Bureaux</a></li>
									<li><a href="partenaires.php">Partenaires</a></li>
									<li><a href="emplois.php">Emplois</a></li>
								</ul>
							</li>
							<li class="dropdown-submenu">
								<a href="#">VIA2S INTÉGRATION</a>
								<ul class="dropdown-menu">
									<li><a href="activite.php">Activité</a></li>
									<li><a href="poles_activite.php">Pôles d'activité</a></li>
									<li><a href="modele_vente.php">Modèle de vente</a></li>
									<li><a href="mission_audit.php">Mission d'audit</a></li>
									<li><a href="centre_de_formation.php">Centre de formation</a></li>
									<li><a href="externalisation.php">Externalisation</a></li>
									<li><a href="mainetnance.php">Maintenance</a></li>
									<li><a href="recherche_et_developpement.php">R&D </a></li>
								</ul>
							</li>
							<li class="dropdown-submenu">
								<a href="#">VIA2S DISTRIBUTION</a>
								<ul class="dropdown-menu">
									<li><a href="creer_devis.php">Créer devis</a></li>
									<li><a href="devis.php">Devis</a></li>
									<li><a href="documentation.php">Documentation</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">Contact <b class="glyphicon glyphicon-triangle-right"></b></a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="contact.php">Contact</a></li>
							<li><a href="demande_adhesion.php">Demande d'adhésion</a></li>
							<li><a href="plan_acces.php">Plan d'accès</a></li>
						</ul>
					</li>
					<?php
					if(isset($_SESSION['co']) && $_SESSION['co'] == 1)
					{
						?>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="glyphicon glyphicon-triangle-right"></b></a>
						  <ul class="dropdown-menu dropdown-menu-right">
						    <li><a href="tableau_de_bord.php">Tableau de bord</a></li>
							<li class="dropdown-submenu">
								<a>Compte</a>
								<ul class="dropdown-menu">
									<li><a href="#">Créer</a></li>
									<li><a href="#">Contacts</a></li>
									<li><a href="#">Rechercher</a></li>
									<li><a href="#">Historique</a></li>
								</ul>
							</li>
							<li class="dropdown-submenu">
								<a>Commande</a>
								<ul class="dropdown-menu">
									<li><a href="#">Créer devis</a></li>
									<li><a href="#">Liste devis</a></li>
									<li><a href="#">Commande</a></li>
									<li><a href="creer_modele.php">Créer modèle</a></li>
									<li><a href="#">Liste modèle</a></li>
									<li><a href="#">Modèles-Profil</a></li>
								</ul>
							</li>
							<li class="dropdown-submenu">
								<a>Gestion</a>
								<ul class="dropdown-menu">
									<li><a href="#">Produits</a></li>
									<li><a href="#">Niveau</a></li>
									<li><a href="#">Familles</a></li>
								</ul>
							</li>
							<li class="dropdown-submenu">
								<a>Documentation</a>
								<ul class="dropdown-menu">
									<li><a href="#">Ajouter</a></li>
									<li><a href="#">Rechercher</a></li>
								</ul>
							</li>
						  </ul>
						</li>
						<?php
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>