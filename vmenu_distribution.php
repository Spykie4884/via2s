<div id="menu_vertical">
	<ul>
		<?php
			if($page!='Créer devis')
			{
				if((!(isset($_SESSION['user_statut']))) || (($_SESSION['user_statut']) == 'visiteur'))
					{
						echo'<li><a href = "demande_connexion.php">Créer devis</a></li>';
					}
					else
						echo'<li><a href="creation_devis.php">Créer devis</a></li>';
			}
			else
				echo'<li> Créer devis ></li>';
			if($page!="Devis")
			{
				if((!(isset($_SESSION['user_statut']))) || (($_SESSION['user_statut']) == 0))
					{
						echo'<li><a href = "demande_connexion.php">Devis</a></li>';
					}
					else
						echo'<li><a href="liste_devis.php">Devis</a></li>';
			}
			else
				echo '<li>Devis ></li>';
			if($page!="Recherche Documentation")
			{
				if((!(isset($_SESSION['user_statut']))) || (($_SESSION['user_statut']) == 0))
					{
						echo'<li><a href = "demande_connexion.php">Documentation</a></li>';
					}
					else
				echo'<li><a href="rechercher_documentation.php">Documentation</a></li>';
			}
			else
				echo'<li>Documentation ></li>';
		?>
	</ul>
</div>