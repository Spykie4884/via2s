<?php
	$bdd = bdd_connexion();
	$resultats=$bdd->query('SELECT * FROM demande_adhesion');
	$resultats->setFetchMode(PDO::FETCH_OBJ);
?>
<?php
if($resultat = $resultats->fetch())
{
	$_POST['tmp2'] = ' ';
?>
<center>
	<form action="validation_demande_adhesion.php" method="post">
		<table style="width: 400px; border: 2px groove #0863CE; cellpadding: 1; cellspacing: 1; margin: 10px auto;">
			<thead>
				<tr>
					<th>Choix</th>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Sociéte</th>
					<th>Fonction</th>
			   </tr>
			</thead>
			<tbody>
				<?php
					echo '<tr><td><input type="radio" name="choix" value="'. $resultat->user_name .'"></td><td>' . $resultat->user_name . '</td><td>' . $resultat->user_Fname . '</td><td>' . $resultat->user_societe . '</td><td>' . $resultat->user_function . '</td></tr>';
					while( $resultat = $resultats->fetch() )
					{
						echo '<tr><td><input type="radio" name="choix" value="'. $resultat->user_name .'"></td><td>' . $resultat->user_name . '</td><td>' . $resultat->user_Fname . '</td><td>' . $resultat->user_societe . '</td><td>' . $resultat->user_function . '</td></tr>';
					}
					$resultats->closeCursor();
				?>
			</tbody>
		</table>
		<table>
			<tr>
				<input id="Submit1" type="submit" value="Détails" name="Détails">
			</tr>
		</table>
	</form>
</center>
<?php
}
else
{
?>

<center>
	<?php
		echo "Il n'y a aucun contact à valider";
	}
	?>
</center>