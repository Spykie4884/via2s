<div id="content">
	<div class="content_item">
		<!-- Affichage dans le cadre blanc de la page-->
		<h1><center>VALIDATION DE CONTACT</center></h1>
		<?php
			if(isset($_POST['choix'])
				&& (($_POST['choix']) != ' '))
			{
				$name=$_POST['choix'];
				$resultats=$bdd->query('SELECT * FROM utilisateurs WHERE valide="' . 0 . '"');
				$resultats->setFetchMode(PDO::FETCH_OBJ);
		?>
			<table>
				<?php
					
				?>
			</table>
		<?php
			}
		?>
	</div>
</div>