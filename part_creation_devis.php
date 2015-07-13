<?php
	if(isset($_POST['pays']))
		$model = $_POST['pays'];
	if(!(isset($model)))
	{
?>
<div id="content">
	<div class="content_item">
		<form method="post" action="creation_devis.php">
			<p>
				<label for="model">Seléctionnez un modèle sur lequel votre devis sera basé : </label>
				<select name="model" id="model">
					<option value="model1">model1</option>
					<option value="model2">model2</option>
					<option value="model3">model3</option>
					<option value="model4">model4</option>
					<option value="model5">model5</option>
					<option value="model6">model6</option>
					<option value="model7">model7</option>
					<option value="model8">model8</option>
				</select>
				<input id="submit" type="submit" value="Seléctionner" name="Seléctionner">
			</p>
		</form>
	</div>
</div>

<?php
	}
	else
		{
?>
<div id="content">
	<div class="content_item">
		<?php
			//progressBar(0);
		?>
		<br/>
		<form action="form_creer_devis.php" method="POST">
			<div class="general">
				<?php
					//echo $message; //si aucune erreur, $message est vide
				?>
				Nom du devis : <input type="text" name="libelle">
			</div>
			<span class="clear">&nbsp;</span>
			<div class="tableau">
				<table class="tab">
					<tr class="tete">
						<th class="debut">N°</th><th class="designation">Désignation</th><th>PU € HT</th><th>QTE</th>
					</tr>
				</table>
			</div>
		</form>
	</div>
</div>
<?php
	}
?>