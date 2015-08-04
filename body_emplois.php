<div class="col-sm-10" style="background-color: white; height: 80%">
	<div class="col-sm-8">
		<div class="container">
			<h2 class="text_title" style="margin-left:35%">EMPLOIS</h2>
			<h4 class="text_sous_title">Nos Offres</h4>
			<?php
				$bdd = bdd_connexion();
				$select_emplois = $bdd->prepare("SELECT * FROM emplois");
				$select_emplois->execute();
				if($liste_emplois = $select_emplois->fetch())
				{
				?>
					<h4 class="text_style">Voici les profils des candidats que nous recherchons :</h4>
				<?php
					echo $liste_emplois['titre'] . '<br/>';
					echo $liste_emplois['fonction'] . '<br/>';
					echo $liste_emplois['mission'] . '<br/>';
					echo $liste_emplois['profil'] . '<br/>';
					echo $liste_emplois['qualites_humaines'] . '<br/>';
					while($liste_emplois = $select_emplois->fetch())
					{
						echo $liste_emplois['titre'] . '<br/>';
						echo $liste_emplois['fonction'] . '<br/>';
						echo $liste_emplois['mission'] . '<br/>';
						echo $liste_emplois['profil'] . '<br/>';
						echo $liste_emplois['qualites_humaines'] . '<br/>';
					}
				}
				else
				{
					echo '<h4 class="text-style">Aucun poste n\'est disponible pour le moment.</h4>';
				}
			?>
			<h4 class="text_sous_title">Nos Stages</h4>
			<h4 class="text_style"><a class="text_blue_gras">VIA2S</a> est ouvert à toutes propositions de stages. Nous recherchons des candidats avec des profils BAC+2 à BAC+5 ou doctorat.
Pour postuler, envoyez votre CV et une lettre de motivation à <a>contact@via2s.com</a>.</h4>
		</div>
	</div>
</div>