<?php
	$compteur = 0;
	//TABLEAU DU BAS
?>
<div id="content">
	<div class="content_item">
		<center>
			<div class="tableau">
				<table class="tab">
					<tr class="tete">
						<th class="debut">N°</th><th class="designation">
							Désignation
						</th>
						<th>
							PU € HT
						</th>
						<th>
							<input type="checkbox" name="check" value="cochez" onClick="checkUncheck(document.formCreer, document.formCreer.check)">
						</th>
					</tr>
					<tr>
						<td>
							<?php
								$compteur++;
								echo $compteur;
							?>
						</td>
						<td>
							<?php
								//DESIGNATION
								echo 'designation';
							?>
						</td>
				 		<td>
							<?php
								//PRIX HT
								echo 42;
							?>
						</td>
						<td>
							<?php
								//CHOIX
							?>
							<input type="checkbox" name="options[]" value="modele_devis_choix">
							<br/>
						</td>
					</tr>
					<tr class="total_fin">
					</tr>
				</table>
			</div>
		</center>
	</div>
</div>