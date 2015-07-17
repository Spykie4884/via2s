<?php
	if(isset($_POST['fun'])
		|| isset($_POST['Nouveausociete'])
		|| isset($_POST['Nouveaumail'])
		|| isset($_POST['Nouveautelephone'])
		|| isset($_POST['Nouveaumobile'])
		|| isset($_POST['Nouveaufax'])
		|| isset($_POST['Nouveauadresse'])
		|| isset($_POST['Nouveaucodepostal'])
		|| isset($_POST['Nouveauville'])
		|| isset($_POST['Nouveaupays']))
	{
		/*$_SESSION['user_societe'] = $_POST['Nouveausociete'];
		$_SESSION['user_email'] = $_POST['Nouveaumail'];
		$_SESSION['user_phone'] = $_POST['Nouveautelephone'];
		$_SESSION['user_mobile'] = $_POST['Nouveaumobile'];
		$_SESSION['user_fax'] = $_POST['Nouveaufax'];
		$_SESSION['user_address'] = $_POST['Nouveauadresse'];
		$_SESSION['user_zipCode'] = $_POST['Nouveaucodepostal'];
		$_SESSION['user_city'] = $_POST['Nouveauville'];
		$_SESSION['user_country'] = $_POST['Nouveaupays'];*/
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=via2s;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
			//echo ("BDD pas connecté");
		}
		//$user_email = $_SESSION['user_email'];
		$user_email = $_SESSION['user_email'];
		if(isset($_POST['fun']))
		{
			$user_function = $_POST['fun'];
			$sql = "UPDATE utilisateurs SET user_function=? WHERE user_email=?";
			$q = $bdd->prepare($sql);
			$q->execute(array($user_function,$user_email));
			$_SESSION['user_function'] = $user_function;
		}
		if(isset($_POST['Nouveausociete']))
		{
			$user_societe = $_POST['Nouveausociete'];
			$sql = "UPDATE utilisateurs SET user_societe=? WHERE user_email=?";
			$q = $bdd->prepare($sql);
			$q->execute(array($user_societe,$user_email));
			$_SESSION['user_societe'] = $user_societe;
		}
		if(isset($_POST['Nouveaumail']))
		{
			$user_emaillog = $_POST['Nouveaumail'];
			$sql = "UPDATE utilisateurs SET user_email=? WHERE user_email=?";
			$q = $bdd->prepare($sql);
			$q->execute(array($user_emaillog,$user_email));
			$_SESSION['user_emaillog'] = $user_emaillog;
		}
		if(isset($_POST['Nouveautelephone']))
		{
			$user_phone = $_POST['Nouveautelephone'];
			$sql = "UPDATE utilisateurs SET user_phone=? WHERE user_email=?";
			$q = $bdd->prepare($sql);
			$q->execute(array($user_phone,$user_email));
			$_SESSION['user_phone'] = $user_phone;
		}
		if(isset($_POST['Nouveaumobile']))
		{
			$user_mobile = $_POST['Nouveaumobile'];
			$sql = "UPDATE utilisateurs SET user_mobile=? WHERE user_email=?";
			$q = $bdd->prepare($sql);
			$q->execute(array($user_mobile,$user_email));
			$_SESSION['user_mobile'] = $user_mobile;
		}
		if(isset($_POST['Nouveaufax']))
		{
			$user_fax = $_POST['Nouveaufax'];
			$sql = "UPDATE utilisateurs SET user_fax=? WHERE user_email=?";
			$q = $bdd->prepare($sql);
			$q->execute(array($user_fax,$user_email));
			$_SESSION['user_fax'] = $user_fax;
		}
		if(isset($_POST['Nouveauadresse']))
		{
			$user_address = $_POST['Nouveauadresse'];
			$sql = "UPDATE utilisateurs SET user_address=? WHERE user_email=?";
			$q = $bdd->prepare($sql);
			$q->execute(array($user_address,$user_email));
			$_SESSION['user_address'] = $user_address;
		}
		if(isset($_POST['Nouveaucodepostal']))
		{
			$user_zipCode = $_POST['Nouveaucodepostal'];
			$sql = "UPDATE utilisateurs SET user_zipCode=? WHERE user_email=?";
			$q = $bdd->prepare($sql);
			$q->execute(array($user_zipCode,$user_email));
			$_SESSION['user_zipCode'] = $user_zipCode;
		}
		if(isset($_POST['Nouveauville']))
		{
			$user_city = $_POST['Nouveauville'];
			$sql = "UPDATE utilisateurs SET user_city=? WHERE user_email=?";
			$q = $bdd->prepare($sql);
			$q->execute(array($user_city,$user_email));
			$_SESSION['user_city'] = $user_city;
		}
		if(isset($_POST['Nouveaupays']))
		{
			$user_country = $_POST['Nouveaupays'];
			$sql = "UPDATE utilisateurs SET user_country=? WHERE user_email=?";
			$q = $bdd->prepare($sql);
			$q->execute(array($user_country,$user_email));
			$_SESSION['user_country'] = $user_country;
		}
	}
?>

<div id="content">
	<div class="content_item">
		<!-- Affichage dans le cadre blanc de la page-->
		<h1>
			<center>VALIDATION DE CONTACT</center>
		</h1>
		<?php
		$bdd = bdd_connexion();
		if(isset($_POST['choix'])
			&& (($_POST['choix']) != ' '))
		{
			$resultats=$bdd->query('SELECT * FROM demande_adhesion WHERE user_name="' . $_POST['choix'] . '"');
			$donnee = $resultats->fetch();
			$_SESSION['TMP'] = $_POST['choix'];
		?>
			<center>
				<table class="table_separee">
					<tr>
						<th>Date d'inscription</th>
						<td><?php echo 'coucou'; ?></td>
					</tr>
					<tr>
						<th>Nom</th>
						<td><?php echo $donnee['user_name']; ?></td>
					</tr>
					<tr>
						<th>Prénom</th>
						<td><?php echo $donnee['user_Fname']; ?></td>
					</tr>
					<tr>
						<th>Fonction</th>
						<td><?php echo $donnee['user_function']; ?></td>
					</tr>
					<tr>
						<th>Société</th>
						<td><?php echo $donnee['user_societe']; ?></td>
					</tr>
					<tr>
						<th>Tél. bureau</th>
						<td><?php echo $donnee['user_phone']; ?></td>
					</tr>
					<tr>
						<th>Tél. mobile</th>
						<td><?php echo $donnee['user_mobile']; ?></td>
					</tr>
					<tr>
						<th>Fax</th>
						<td><?php echo $donnee['user_fax']; ?></td>
					</tr>
					<tr>
						<th>Adresse mail</th>
						<td><?php echo $donnee['user_email']; ?></td>
					</tr>
					<tr>
						<th>Adresse</th>
						<td><?php echo $donnee['user_address']; ?></td>
					</tr>
					<tr>
						<th>Code postal</th>
						<td><?php echo $donnee['user_zipCode']; ?></td>
					</tr>
					<tr>
						<th>Ville</th>
						<td><?php echo $donnee['user_city']; ?></td>
					</tr>
					<tr>
						<th>Pays</th>
						<td><?php echo $donnee['user_country']; ?></td>
					</tr>
					<tr>
						<th>Statut</th>
						<td></td>
					</tr>
				</table>
				<form method="post" action="validation_demande_adhesion.php">
					<table style="margin: 10px auto;">
						<tr>
							<td>
									<input id="Submit1" type="submit" value="Valider" name="validation">
							</td>
							<td>
									<input id="Submit1" type="submit" value="Refuser" name="validation">
							</td>
						</tr>
					</table>
				</form>
			</center>
		<?php
		}
			else
				if(isset($_POST['validation']) && ($_POST['validation'] == 'Valider')
					&& isset($_SESSION['TMP']) && ($_SESSION['TMP']!=''))
				{
					$valide = 1;
					$bdd = bdd_connexion();
					$resultats=$bdd->query('SELECT * FROM demande_adhesion WHERE user_name="' . $_SESSION['TMP'] . '"');
					$donnee = $resultats->fetch();
					$registration = $bdd->prepare('INSERT INTO utilisateurs(
								user_name, user_Fname, user_societe, user_function,
								user_phone, user_mobile, user_fax, user_email,
								user_address, user_zipCode, user_city, user_country,
								user_statut, user_mdp, date_creation, valide
								) VALUES(
								:user_name, :user_Fname, :user_societe, :user_function,
								:user_phone, :user_mobile, :user_fax, :user_email,
								:user_address, :user_zipCode, :user_city, :user_country,
								:user_statut, :user_mdp, :date_creation, :valide
								)');
					$registration->execute(array(
								'user_name' => $donnee['user_name'],
								'user_Fname' => $donnee['user_Fname'],
								'user_societe' => $donnee['user_societe'],
								'user_function' => $donnee['user_function'],
								'user_phone' => $donnee['user_phone'],
								'user_mobile' => $donnee['user_mobile'],
								'user_fax' => $donnee['user_fax'],
								'user_email' => $donnee['user_email'],
								'user_address' => $donnee['user_address'],
								'user_zipCode' => $donnee['user_zipCode'],
								'user_city' => $donnee['user_city'],
								'user_country' => $donnee['user_country'],
								'user_statut' => 'client',
								'user_mdp' => $donnee['user_mdp'],
								'date_creation' => $donnee['user_date'],
								'valide' => 1,
							));
					$q = $bdd->prepare("DELETE FROM demande_adhesion WHERE user_name=?");
					$q->execute(array($_SESSION['TMP']));
					echo '<center>Contact ajouté.</center>';
					$_SESSION['TMP']='';
				}
				else
				{
					if(isset($_POST['validation']) && ($_POST['validation'] == 'Refuser')
						&& isset($_SESSION['TMP']) && ($_SESSION['TMP']!=''))
					{
						$valide = 1;
						$bdd = bdd_connexion();
						echo 'cou' . $_SESSION['TMP'];
						$q = $bdd->prepare("DELETE FROM demande_adhesion WHERE user_name=?");
						$q->execute(array($_SESSION['TMP']));
						$_SESSION['TMP']='';
						echo '<center>Contact refusé.</center>';
					}
					else
					{
						echo '<center>Aucune demande de contact pour le moment.</center>';
					}
				}
		?>
	</div>
</div>