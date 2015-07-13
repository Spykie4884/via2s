<ul>
	<?php
		if((isset($_SESSION['user_statut'])) && (($_SESSION['user_statut'] == 'commercial') ||
					($_SESSION['user_statut'] == 'administrateur') ||
					($_SESSION['user_statut'] == 'super-administrateur')))
		{
	?>
			<li class="sousmenu">Compte
				<ul class="niveau2">
					<?php
						if($page!='Ajout contact')
							echo'<li><a href = "creation_contact.php">Créer</a></li>';
						else
							echo'<li>Créer ></li>';
						if($page!='Contacts')
							echo'<li><a href = "contact.php">Contacts</a></li>';
						else
							echo'<li>Contacts ></li>';
						if($page!='Rechercher contact')
							echo'<li><a href = "rechercher_contact.php">Rechercher</a></li>';
						else
							echo'<li>Rechercher ></li>';
						if($page!='Historique contact')
							echo'<li><a href = "historique_contact.php">Historique</a></li>';
						else
							echo'<li>Historique ></li>';
					?>
				</ul>
			</li>
	<?php
		}
	?>
	<li class="sousmenu">Commande
		<ul class="niveau2">
			<?php
				if($page!='Creation devis')
				{
					echo'<li><a href = "creation_devis.php">Créer devis</a></li>';
				}
				else
					echo'<li>Créer devis ></li>';
				if($page!='Liste devis')
					echo'<li><a href = "liste_devis.php">Liste devis</a></li>';
				else
					echo'<li>Liste devis ></li>';
				if($page!='Commande devis')
					echo'<li><a href = "commande_devis.php">Commande</a></li>';
				else
					echo'<li>Commande ></li>';
				if($page!='Créer modèle')
					echo'<li><a href = "creation_modele_devis.php">Créer modèle</a></li>';
				else
					echo'<li>Créer modèle ></li>';
				if($page!='Liste modèle')
					echo'<li><a href = "liste_modele_devis.php">Liste modèle</a></li>';
				else
					echo'<li>Liste modèle ></li>';
				if($page!='Modele-Profil')
					echo'<li><a href = "modele_profil.php">Modèles-Profil</a></li>';
				else
					echo'<li>Modèle-Profil ></li>';
			?>
		</ul>
	</li>
	<li class="sousmenu">Gestion
		<ul class="niveau2">
			<?php
				if($page!='Gestion Produits')
					echo'<li><a href = "gestion_produits.php">Produits</a></li>';
				else
					echo'<li>Produits ></li>';
				if($page!='Niveau')
					echo'<li><a href = "niveau.php">Niveau</a></li>';
				else
					echo'<li>Niveau ></li>';
				if($page!='Familles')
					echo'<li><a href = "familles.php">Familles</a></li>';
				else
					echo'<li>Familles ></li>';
			?>
		</ul>
	</li>
	<li class="sousmenu">Documentation
		<ul class="niveau2">
			<?php
				if($page!='Creer documentation')
					echo'<li><a href = "creation_documentation.php">Ajouter</a></li>';
				else
					echo'<li>Ajouter ></li>';
				if($page!='Rechercher documentation')
					echo'<li><a href = "rechercher_documentation.php">Rechercher</a></li>';
				else
					echo'<li>Rechercher ></li>';
			?>
		</ul>
	</li>
</ul>