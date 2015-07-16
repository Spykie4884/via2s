<?php
	//LIMITATION DES DROITS D'ACCES A LA PAGE
	include('fun_droit_acces.php');
	acces_page_limited();
?>
<div id="menu_vertical">
	<ul>
		<?php
			$page = 'Liste modele';
			include('fun_creation_contact.php');
			include('vmenu_admin.php');
		?>
	</ul>
</div>
<?php
	include('part_liste_modele_devis.php');
?>