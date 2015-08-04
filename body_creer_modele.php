<div class="col-sm-10" style="background-color: white; height: 80%">
	<div class="container">
		<div style="text-align: center;">
			<h2 class="text_title">CRÉATION DE MODÈLES</h2>
		</div>
		<div style="text-align: center;">
			<h4 class="text_sous_title">CRÉER UN NOUVEAU MODÈLES</h4>
		</div>
		<form action="creer_modele_2.php" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4" style="text-align: center;">
				<div class="form-group">
					<div><input name="modele_name" placeholder="Nom de modèle" class="form-control" type="text" id="modele_name"/>
					</div>
				</div>
				<div class="form-group">
					<div>
						<input class="btn btn-primary btn btn-primary" type="submit" value="Créer"/>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
			</div>
		</form>
		<div class="col-sm-12" style="text-align: center;">
			<h4 class="text_sous_title">CHOISIR UN MODÈLES EXISTANT</h4>
			<form action="creer_modele_2.php" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
				<select name="modele_name_exist" id="modele_name" onchange='this.form.submit()'>
					<option value=" "></option>
					<?php
					$bdd = bdd_connexion();
					$mod = $bdd->prepare('SELECT nom_modele FROM modele');
					$mod->execute(array(''));
					while($ret = $mod->fetch())
					{
						echo '<option value="' . $ret['nom_modele'] . '">' . $ret['nom_modele'] . '</option>';
					}
					?>
				</select>
			</form>
		</div>
	</div>
</div>