<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=via2s;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		echo ("BDD pas connecté");
	}
	try
	{
		$Yaka = new PDO("sqlsrv:Server=192.168.100.5\SQLYAKA;Database=base_test_2015", "sa", "SecurityMaster08");
	}
	catch (Exception $e)
	{
		echo 'Yaka pas connecté';
	}
	$resultats=$bdd->query('SELECT * FROM utilisateurs WHERE valide="' . 0 . '"');
	$resultats->setFetchMode(PDO::FETCH_OBJ);
?>
<?php
	if($resultat = $resultats->fetch())
	{
		
		$_POST['tmp'] = ' ';
?>
<center>
	<form action="validation_inscription.php" method="post">
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
		<input id="Submit1" type="submit" value="Enregistrer" name="Enregistrer">
	</form>
</center>
<?php
	}
	else
		echo '<center>Aucune demande de contact pour le moment.</center>';
?>