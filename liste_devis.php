<?php
include('first_head.php');
include('fun_index.php');
?>
<html>
	<head>
		<title>VIA2S - VIDÉO INTRUSION ACCESS SUPERVISION SERVICES</title>
		<?php
		include('head.php');
		?>
	</head>
	<body class="row">
		<div class="col-sm-12">
			<?php
			include('hnavbar.php');
			?>
		</div>
		<?php
		include('vnavbar.php');
		if(isset($_SESSION['co']) && $_SESSION['co'] == 1)
			include('body_liste_devis.php');
		else
			include('body_connexion_require.php');
		include('footer.php');
		?>
	</body>
</html>