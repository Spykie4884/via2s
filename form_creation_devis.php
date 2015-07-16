<?php
	$compteur = 0;
?>
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
		<tr class="total_fin">
		</tr>
		<td>
			<?php
				$compteur++;
				echo $compteur;
			?>
		</td>
		<td>
		</td>
		<td>
		</td>
	</table>
</div>