<?php
include('first_head.php');
include('fun_index.php');
$_SESSION['modele_name'] = ' ';
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
		include('body_creer_modele.php');
		?>
	</body>
</html>