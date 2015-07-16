<?php
	//PAGE IDENTIFICATION
	
	// INCLUE LES PAGES DE:
	// CONNEXIONS AUX BDD
	// LE SESSION_ACTIVE
	// LES COOKIES
	include('first_include.php');
	include('fun_identification.php');
	if( (isset($_POST['user_emaillog'])) && (isset($_POST['user_mdp'])) )
	{
		$bdd = bdd_connexion();
		$Yaka = Yaka_connexion();
		$requete = bdd_id_1($bdd, 'utilisateurs', 'user_email', $_POST['user_emaillog']);
		$donneex = $requete->fetch();
		if((isset($_POST['user_emaillog'])) && (isset($_POST['user_mdp'])) && (($_POST['user_emaillog']) != '') && (($_POST['user_mdp']) != '')
		&& (($_POST['user_emaillog']) == $donneex['user_email']) && (($_POST['user_mdp']) == $donneex['user_mdp']))
		{
			//$_SESSION['user_statut'] = 'super-administrateur';
			$_SESSION['user_statut'] = $donneex['user_statut'];
			echo $_SESSION['user_statut'];
			if(!(isset($_SESSION['user_name'])))
			{
				$_SESSION['user_name'] = $donneex['user_name'];
				$_SESSION['user_Fname'] = $donneex['user_Fname'];
				$_SESSION['user_societe'] = $donneex['user_societe'];
				$_SESSION['user_function'] = $donneex['user_function'];
				$_SESSION['user_phone'] = $donneex['user_phone'];
				$_SESSION['user_mobile'] = $donneex['user_mobile'];
				$_SESSION['user_fax'] = $donneex['user_fax'];
				$_SESSION['user_email'] = $donneex['user_email'];
				$_SESSION['user_address'] = $donneex['user_address'];
				$_SESSION['user_zipCode'] = $donneex['user_zipCode'];
				$_SESSION['user_city'] = $donneex['user_city'];
				$_SESSION['user_country'] = $donneex['user_country'];
				$_SESSION['user_statut'] = $donneex['user_statut'];
				$_SESSION['user_mdp'] = $donneex['user_mdp'];
			}
			else
			{
				$_SESSION['user_name'] = $donneex['user_name'];
				$_SESSION['user_mdp'] = $donneex['user_mdp'];
				$_SESSION['user_Fname'] = $donneex['user_Fname'];
				$_SESSION['user_societe'] = $donneex['user_societe'];
				$_SESSION['user_function'] = $donneex['user_function'];
				$_SESSION['user_phone'] = $donneex['user_phone'];
				$_SESSION['user_mobile'] = $donneex['user_mobile'];
				$_SESSION['user_fax'] = $donneex['user_fax'];
				$_SESSION['user_email'] = $donneex['user_email'];
				$_SESSION['user_address'] = $donneex['user_address'];
				$_SESSION['user_zipCode'] = $donneex['user_zipCode'];
				$_SESSION['user_city'] = $donneex['user_city'];
				$_SESSION['user_country'] = $donneex['user_country'];
				$_SESSION['user_statut'] = $donneex['user_statut'];
			}
			$_SESSION['co'] = 1;
			header('Location: index.php');
		}
	}
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
						include('body_identification.php');
						include('footer.php');
					?>
			</div>
		</div>
	</body>
</html>