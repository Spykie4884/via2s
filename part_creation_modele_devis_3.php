<?php
	$bdd = bdd_connexion();
	$Yaka = Yaka_connexion();
	$compteur = 0;
?>
<div id="content">
	<div id="content_item">
		<center><h1>CREATION MODELE DEVIS</h1></center>
		<br/>
		<br/>
		<center>
			<?php
				include('form_recherche_creation_modele_devis.php');
				include('form_formulaire_recherche_creation_modele_devis.php');
				include('form_creation_modele_devis.php');
			?>
		</center>
	</div>
</div>