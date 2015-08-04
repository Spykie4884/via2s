<div class="col-sm-10" style="background-color: white; height: 80%">
	<center>
		<h2 class="text_title" style="">ADMINISTRATION DU SITE</h2>
		<h3 class="text_sous_title" style="">COMPTE</h3>
		<center>
			<div class="col-sm-6" style="text-align: right;">Contacts en attente : </div>
			<?php
				$nbr1 = 0;
				$nbr2 = 0;
				$nbr3 = 0;
				$nbr4 = 0;
				$bdd = bdd_Connexion();
				$count_wait_client = $bdd->prepare('SELECT * FROM utilisateurs WHERE valide ="'. 0 .'"');
				$count_wait_client->execute();
				while($count_nbr1 = $count_wait_client->fetch())
				{
					$nbr1++;
				}
				$count_wait_adhestion = $bdd->prepare('SELECT * FROM demande_adhesion');
				$count_wait_adhestion->execute();
				while($count_nbr2 = $count_wait_adhestion->fetch())
				{
					$nbr2++;
				}
				$count_wait_adhestion = $bdd->prepare('SELECT * FROM devis');
				$count_wait_adhestion->execute();
				while($count_nbr2 = $count_wait_adhestion->fetch())
				{
					$nbr3++;
				}
				$count_wait_adhestion = $bdd->prepare('SELECT * FROM commande');
				$count_wait_adhestion->execute();
				while($count_nbr2 = $count_wait_adhestion->fetch())
				{
					$nbr4++;
				}
			?>
			<div class="col-sm-6" style="text-align: left;"><?php echo $nbr1; ?></div>
		</center>
		<div class="col-sm-6" style="text-align: right;">Demande d'adhésion en attente : </div>
		<div class="col-sm-6" style="text-align: left;"><?php echo $nbr2; ?></div>
		<h3 class="text_sous_title" style="">COMMANDE</h3>
		<div class="col-sm-6" style="text-align: right;">Devis en cours : </div>
		<div class="col-sm-6" style="text-align: left;"><?php echo $nbr3; ?></div>
		<div class="col-sm-6" style="text-align: right;">Commande : </div>
		<div class="col-sm-6" style="text-align: left;"><?php echo $nbr4; ?></div>
	</center>
</div>