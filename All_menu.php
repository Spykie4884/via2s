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