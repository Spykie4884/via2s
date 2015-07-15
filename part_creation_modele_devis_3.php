<?php
	include('fun_creation_modele.php');
?>
<div id="content">
	<div id="content_item">
		<center><h1>CREATION MODELE DEVIS3333333333333</h1></center>
		<br/>
		<br/>
		<?php
			$edit_modele = $bdd->prepare('SELECT * FROM modele WHERE nom_modele = :nommodele ');
			$edit_modele->execute(array(':nommodele' => $_POST['modeles_name']));
			$mod = $edit_modele->fetch();
			echo $mod['nom_modele'];
		?>
	</div>
</div>