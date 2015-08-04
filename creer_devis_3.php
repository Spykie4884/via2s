<?php
include('first_head.php');
include('fun_index.php');
if(isset($_POST['quantitee']))
{
	echo $_POST['quantitee'];
	$_SESSION['quanti'] = $_POST['quantitee'];
}
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
		include('body_creer_devis_3.php');
		?>
	</body>
</html>