<?php
	//PAGE BUREAUX
	
	// INCLUE LES PAGES DE:
	// CONNEXIONS AUX BDD
	// LE SESSION_ACTIVE
	// LES COOKIES
	include('first_include.php');
?>
<html>
	<head>
		<title>VIA2S</title>
		<?php
			// INCLUE LE CSS
			include('head.php');
		?>
	</head>
	<body>
		<div id="main">
			<div id="site_content">
				<div id="site_heading">
					<?php
						//INCLUDE LE BANDEAU
						include('bandeau.php');
					?>
					<div id="header">
						<div id="menubar">
							<hr/>
							<?php
								//INCLUDE LES MENUS DU HAUT
								include('menu.php');
								include('sous_menu_groupe.php');
								include('sous_menu_contact.php');
							?>
						</div>
						<script>afficherSousMenu('sousmenu-accueil');</script>
						<?php
							// INCLUE LES PAGES DE
							// CONNEXION RAPIDE
							// LA FILE D'ARIANE
							include('sous_bandeau.php');
						?>
					</div>
				</div>
				</br>
					<?php
						include('body_bureaux.php');
						include('footer.php');
					?>
			</div>
		</div>
	</body>
</html>