<?php
if(isset($_POST['nom_contact']) && $_POST['nom_contact'] != ''
	/*&& isset($$_POST['email_contact']) && $_POST['email_contact'] != ''
	&& isset($_POST['societe_contact']) && $_POST['societe_contact'] != ''
	&& isset($_POST['fonction_contact']) && $_POST['fonction_contact'] != ''
	&& isset($_POST['telephone_contact']) && $_POST['telephone_contact'] != ''
	&& isset($_POST['objet_message_contact']) && $_POST['objet_message_contact'] != ''
	&& isset($_POST['message_contact']) && $_POST['message_contact'] != ''*/)
{
	echo "zkezf,ze";
	$bdd = bdd_Connexion();
	//$demande_contact = $bdd->prepare("INSERT INTO contact VALUES (nom_contact, email_contact, societe_contact, fonction_contact, telephone_contact, objet_message_contact, message_contact) VALUES (?, ?, ?, ?, ?, ?, ?)");
	$demande_contact = $bdd->prepare('INSERT INTO contact VALUES (nom_contact) VALUES (?)');
	$demande_contact->bindParam(1, $_POST['nom_contact']);
	/*$demande_contact->bindParam(2, $_POST['email_contact']);
	$demande_contact->bindParam(3, $_POST['societe_contact']);
	$demande_contact->bindParam(4, $_POST['fonction_contact']);
	$demande_contact->bindParam(5, $_POST['telephone_contact']);
	$demande_contact->bindParam(6, $_POST['objet_message_contact']);
	$demande_contact->bindParam(7, $_POST['message_contact']);*/

	$demande_contact->execute();
	echo "insert réussit";
}
else
{
?>
	<div class="col-sm-10" style="background-color: white; height: 80%">
		<form method="post" action="contact.php">
			<h2 class="text_title" style="margin-left:35%">CONTACT</h2>
			<div class="form-group">
				<label for="nom_contact">Nom:</label>
				<input type="text" class="form-control" id="nom_contact" name="nom_contact">
			</div>
			<div class="form-group">
				<label for="email_contact">Email:</label>
				<input type="mail" class="form-control" id="email_contact" name="email_contact">
			</div>
			<div class="form-group">
				<label for="societe_contact">Socété:</label>
				<input type="text" class="form-control" id="societe_contact" name="societe_contact">
			</div>
			<div class="form-group">
				<label for="fonction_contact">Fonction:</label>
				<input type="text" class="form-control" id="fonction_contact" name="fonction_contact">
			</div>
			<div class="form-group">
				<label for="telephone_contact">Téléphone:</label>
				<input type="number" class="form-control" id="telephone_contact" name="telephone_contact">
			</div>
			<div class="form-group">
				<label for="objet_message_contact">Select list:</label>
				<select class="form-control" id="objet_message_contact" name="objet_message_contact">
					<option value="1">Demande de devis</option>
					<option value="2">Demande de support technique</option>
					<option value="3">Demande d'information</option>
					<option value="4">Autres</option>
				</select>
			</div>
			<div class="form-group">
				<label for="comment">Comment:</label>
				<textarea class="form-control" rows="5" id="comment" name="message_contact"></textarea>
			</div>
			<center>
				<input class="btn btn-primary btn btn-primary" type="submit" value="Envoyer"/>
			</center>
		</form>
	</div>
<?php
}
?>