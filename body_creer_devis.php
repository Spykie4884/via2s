<div class="col-sm-10" style="background-color: white; height: 80%">
	<div class="container">
		<div style="text-align: center;">
			<h2 class="text_title">CRÉATION DE DEVIS</h2>
		</div>
		<div style="text-align: center;">
			<h4 class="text_sous_title">CRÉER UN NOUVEAU DEVIS</h4>
		</div>
		<form action="creer_devis_2.php" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4" style="text-align: center;">
				<div class="form-group">
					<div>
						<input name="devis_name" placeholder="Nom de devis" class="form-control" type="text" id="devis_name"/>
					</div>
				</div>
				<center>
					<select name="modele_exist" id="modele_name">
						<option value=""></option>
						<?php
						$bdd = bdd_connexion();
						
						$mod = $bdd->prepare('SELECT * FROM modele_profil WHERE nom_client="'.$_SESSION['user_name'].'"');
						$mod->execute(array(''));
						while($ret = $mod->fetch())
						{
							echo '<option value="' . $ret['nom_modele'] . '" name="nom_modele">' . $ret['nom_modele'] . '</option>';
						}
						?>
					</select>
				</center>
				<br/>
				<div class="form-group">
					<div>
						<input class="btn btn-primary btn btn-primary" type="submit" value="Créer"/>
					</div>
				</div>
			</div>
		</form>
		<div class="col-sm-12" style="text-align: center;">
			<h4 class="text_sous_title">MODIFIER UN DEVIS EXISTANT</h4>
			<form action="creer_devis_2.php" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
				<select name="devis_name_exist" id="devis_name" onchange='this.form.submit()'>
					<option value=" "></option>
					<?php
					$bdd = bdd_connexion();
					$mod = $bdd->prepare('SELECT libelle FROM devis WHERE id_user="'.$_SESSION['user_id'].'"');
					$mod->execute(array(''));
					while($ret = $mod->fetch())
					{
						echo '<option value="' . $ret['libelle'] . '">' . $ret['libelle'] . '</option>';
					}
					?>
				</select>
			</form>
		</div>
	</div>
</div>