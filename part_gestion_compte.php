<div id="content">
	<div id="content_item">
		<center>
			<h1>GESTION DE PRODUITS</h1>
			<table class="table_separee">
				<tr>
					<th>Date d'inscription</th>
					<td><?php echo 'coucou'; ?></td>
				</tr>
				<tr>
					<th>Nom</th>
					<td><?php echo $_SESSION['user_name']; ?></td>
				</tr>
				<tr>
					<th>Prénom</th>
					<td><?php echo $_SESSION['user_Fname']; ?></td>
				</tr>
				<tr>
					<th>Fonction</th>
					<td><?php echo $_SESSION['user_function']; ?></td>
				</tr>
				<tr>
					<th>Société</th>
					<td><?php echo $_SESSION['user_societe']; ?></td>
				</tr>
				<tr>
					<th>Tél. bureau</th>
					<td><?php echo $_SESSION['user_phone']; ?></td>
				</tr>
				<tr>
					<th>Tél. mobile</th>
					<td><?php echo $_SESSION['user_mobile']; ?></td>
				</tr>
				<tr>
					<th>Fax</th>
					<td><?php echo $_SESSION['user_fax']; ?></td>
				</tr>
				<tr>
					<th>Adresse mail</th>
					<td><?php echo $_SESSION['user_email']; ?></td>
				</tr>
				<tr>
					<th>Adresse</th>
					<td><?php echo $_SESSION['user_address']; ?></td>
				</tr>
				<tr>
					<th>Code postal</th>
					<td><?php echo $_SESSION['user_zipCode']; ?></td>
				</tr>
				<tr>
					<th>Ville</th>
					<td><?php echo $_SESSION['user_city']; ?></td>
				</tr>
				<tr>
					<th>Pays</th>
					<td><?php echo $_SESSION['user_country']; ?></td>
				</tr>
				<tr>
					<th>Statut</th>
					<td><?php echo $_SESSION['user_statut']; ?></td>
				</tr>
			</table>
			<table style="margin: 10px auto;">
				<tr>
					<td>
						<form method="post" action="form_gestion_compte.php">
							<input id="Submit1" type="submit" value="Modifier" name="Modifier">
						</form>
					</td>
					<td>
						<form action="form_modif_password.php" method="post">
							<input name="Change" type="submit" value="Changer de mot de passe">
						</form>
					</td>
				</tr>
			</table>
		</center>
	</div>
</div>