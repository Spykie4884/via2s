<?php
include('first_head.php');
include('fun_deconnexion.php');
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
			deconnexion();
			include('hnavbar.php');
			?>
		</div>
		<?php
		include('vnavbar.php');
		include('body_deconnexion.php');
		include('footer.php');
		?>
	</body>
</html>