<?php
	$bdd = bdd_connexion();
	$Yaka = Yaka_connexion();
	if((isset($_POST['submit'])) && ($_POST['submit'] == 'OUI'))
	{
		echo 'plopnfyjhtyhdfh';
	}
	else
	{
		$_POST['submit'] = '';
	}
?>
<div id="content">
	<div id="content_item">
		<center>
			<h3>RECHERCHE ICI</h3>
			<?php
				include('form_creation_modele_devis.php');
			?>
		</center>
	</div>
</div>