<?php
	//LIMITATION DES DROITS D'ACCES A LA PAGE
	include('fun_droit_acces.php');
	acces_page_limited();
?>
<div id="menu_vertical">
	<ul>
		<?php
			$page = 'Modele-Profil';
			include('fun_creation_contact.php');
			include('vmenu_admin.php');
		?>
	</ul>
</div>
<?php
	include('part_modele_profil.php');
?>