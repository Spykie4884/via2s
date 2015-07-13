<?php
	include('BDD_Connexion.php');
?>
<html>
	<head>
		<title>VIA2S</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link href="css/css.css" rel="stylesheet" type="text/css" />
		<link href="css/menunew.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="icon" type="image/jpeg" href="/img/up.GIF" />
		<script type="text/javascript" src="/js/JavaScriptFlashGateway.js"></script>
		<script type="text/javascript" src="/js/underlayer.js"></script>
		<script src="js/menu.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider();
			});
			function getlink (  )
			{
				document.form1.submit() ;
			}
		</script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
		</script>
		<script type="text/javascript">
			function initialiser() {
			var latlng = new google.maps.LatLng(48.655320, 2.380900);
			//objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
			//de définir des options d'affichage de notre carte
			var options = {
			center: latlng,
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			//constructeur de la carte qui prend en paramêtre le conteneur HTML
			//dans lequel la carte doit s'afficher et les options
			var carte = new google.maps.Map(document.getElementById("carte"), options);

			var Lat = carte.getCenter().lat();
			var Lng = carte.getCenter().lng();

			Marker = new google.maps.Marker({
			map: carte,
			position: new google.maps.LatLng(Lat, Lng)
			});
			}
		</script>
	</head>
	<body>
		<div id="main">
			<div id="site_content">
				<div id="site_heading">
					<?php
						include('bandeau.php');
					?>
					<div id="header">
						<div id="menubar">
							<hr/>
							<?php
								include('menu.php');
								include('sous_menu_groupe.php');
								include('sous_menu_contact.php');
							?>
						</div>
						<script>afficherSousMenu('sousmenu-accueil');</script>
						<?php
							include('login_part.php');
						?>
					</div>
				</div>
				</br>
					<?php
						include('body_partenaires.php');
						include('footer.php');
					?>
			</div>
		</div>
	</body>
</html>