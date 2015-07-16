
<?php
	$page = 'Créer modèle';
?>
<div id="menu_vertical">
	<ul>
		<?php
			include('fun_creation_modele.php');
			include('vmenu_admin.php');
		?>
	</ul>
</div>
<?php
	$bdd = bdd_connexion();
	$Yaka = Yaka_connexion();
	if((isset($_POST['submit'])) && ($_POST['submit'] == 'OUI'))
	{
		include('part_creation_modele_devis_3.php');
	}
	else
	{
		$_POST['submit'] = '';
		include('part_creation_modele_devis.php');
	}
?>
<?php
	
?>