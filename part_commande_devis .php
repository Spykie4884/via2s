<div id="menu_vertical">
	<ul>
		<?php
			include('fun_creation_contact.php');
			include('vmenu_admin.php');
		?>
	</ul>
</div>
<div id="content">
	<div id="content_item">
		<center><h1>Commande Devis</h1></center>
		<br/>
		<br/>
		<center>
			<div style="text-align: right;">
				<form method="post" action="creation_contact.php">
					<label for="user_name">Nom :</label>
					<input type="text" name="user_name"><br/>
					
					<label for="user_Fname">Prénom :</label>
					<input type="text" name="user_Fname"><br/>
					
					<label for="user_societe">Société :</label>
					<input type="text" name="user_societe"><br/>
					
					<label for="user_function">Fonction :</label>
					<input type="text" name="user_function"><br/>
					
					<label for="user_phone">Téléphone :</label>
					<input type="text" name="user_phone"><br/>
					
					<label for="user_mobile">Mobile :</label>
					<input type="text" name="user_mobile"><br/>
					
					<label for="user_fax">Fax :</label>
					<input type="text" name="user_fax"><br/>
					
					<label for="user_email">E-mail :</label>
					<input type="text" name="user_email"><br/>
					
					<label for="user_address">Addresse :</label>
					<input type="text" name="user_address"><br/>
					
					<label for="user_zipCode">Code Postale :</label>
					<input type="text" name="user_zipCode"><br/>
					
					<label for="user_city">Ville :</label>
					<input type="text" name="user_city"><br/>
					
					<label for="user_country">Pays :</label>
					<input type="text" name="user_country"><br/>
					
					<label for="user_statut">Statut :</label>
					<input type="text" name="user_statut"><br/>
					
					<label for="user_mdp">password :</label>
					<input type="password" name="user_mdp"><br/>

					<label for="user_mdprep">repeat password :</label>
					<input type="password" name="user_mdprep"><br/>

					<input type="submit" name="valider" value="inscription">
				</form>
			</div>
		</center>
	</div>
</div>