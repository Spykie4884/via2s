<?php
	$_POST['user_name']='';
	$_POST['user_Fname']='';
	$_POST['user_function']='';
	$_POST['user_societe']='';
	$_POST['user_phone']='';
	$_POST['user_mobile']='';
	$_POST['user_fax']='';
	$_POST['user_email']='';
	$_POST['user_address']='';
	$_POST['user_zipCode']='';
	$_POST['user_city']='';
	$_POST['user_country']='';
	$_POST['user_mdp']='';
	$_POST['user_mdprep']='';
	$_POST['user_statut']='';
	
	$nom='';
	$prenom='';
	$fonc_util='';
	$mail='';
	$tel_bureau='';
	$tel_mobile='';
	$fax='';
	$societe='';
	$addre='';
	$code='';
	$ville='';
	$pays='';
	if(((@$_SESSION['err_nom'])==1)
		|| ((@$_SESSION['err_prenom'])==1)
		|| ((@$_SESSION['err_fonction'])==1)
		|| ((@$_SESSION['err_societe'])==1)
		|| ((@$_SESSION['err_tel'])==1)
		|| ((@$_SESSION['err_telm'])==1)
		|| ((@$_SESSION['err_fax'])==1)
		|| ((@$_SESSION['err_mail'])==1)
		|| ((@$_SESSION['err_adr'])==1)
		|| ((@$_SESSION['err_cp'])==1)
		|| ((@$_SESSION['err_ville'])==1)
		|| ((@$_SESSION['err_pays'])==1))
	{
		$nom=$_SESSION['nom'];
		$prenom=$_SESSION['prenom'];
		$fonc_util=$_SESSION['fonction'];
		$mail=$_SESSION['mail'];
		$tel_bureau=$_SESSION['tel_bureau'];
		$tel_mobile=$_SESSION['tel_mobile'];
		$fax=$_SESSION['fax'];
		$societe=$_SESSION['societe'];
		$addre=$_SESSION['adresse'];
		$code=$_SESSION['code_postal'];
		$ville=$_SESSION['ville'];
		$pays=$_SESSION['pays'];
	?>
	<br><br><font color="red"><b>Saisies non valides pour les champs suivants : </b></font><br>
	<?php
		if((@$_SESSION['err_nom'])==1)
		{
			echo'<b>nom</b><br>';
		}
		if((@$_SESSION['err_prenom'])==1)
		{
			echo'<b>prénom</b><br>';
		}
		if((@$_SESSION['err_fonction'])==1)
		{
			echo '<b>fonction</b><br>';
		}
		if((@$_SESSION['err_societe'])==1)
		{
			echo '<b>nom de société</b><br>';
		}
		if((@$_SESSION['err_tel'])==1)
		{
			echo '<b>numéro de téléphone de bureau</b><br>';
		}
		if((@$_SESSION['err_telm'])==1)
		{
			echo '<b>numéro de téléphone mobile</b><br>';
		}
		if((@$_SESSION['err_fax'])==1)
		{
			echo '<b>numéro de fax</b><br>';
		}
		if((@$_SESSION['err_mail'])==1)
		{
			echo '<b>adresse mail</b><br>';
		}
		if((@$_SESSION['err_adr'])==1)
		{
			echo '<b>adresse</b><br>';
		}
		if((@$_SESSION['err_cp'])==1) {
	?>
	<b>code postal</b><br>
	<?php
		}
		if((@$_SESSION['err_ville'])==1)
		{
			echo '<b>ville</b><br>';
		}
		if((@$_SESSION['err_pays'])==1)
		{
			echo '<b>pays</b><br>';
		}
		$_SESSION['err_nom']=-5;
		$_SESSION['err_prenom']=-5;
		$_SESSION['err_fonction']=-5;
		$_SESSION['err_societe']=-5;
		$_SESSION['err_tel']=-5;
		$_SESSION['err_telm']=-5;
		$_SESSION['err_fax']=-5;
		$_SESSION['err_mail']=-5;
		$_SESSION['err_adr']=-5;
		$_SESSION['err_cp']=-5;
		$_SESSION['err_ville']=-5;
		$_SESSION['err_pays']=-5;
	}
?>

<div id="content">
	<div class="content_item">
		<h1><center>AJOUTER UN CONTACT</center></h1>
		<br>
		<form method="post" action="creation_contact.php">
			<br>
			<table>
				<tr>
					<td style="text-align:right;">
						<font color="red" face="Verdana, Arial">*</font>Nom :
					</td>
					<td>
						<input type="text" name="user_name" size="58">
					</td>
				</tr>
				<tr>
					<td style="text-align:right;"><font color="red" face="Verdana, Arial">*</font>Prénom :</td>
					<td>
						<input type="text" name="user_Fname" size="58">
					</td>
				</tr>
				<tr>
					<td style="text-align:right;"><font color="red" face="Verdana, Arial">*</font>Fonction :</td>
					<td>
						<input type="text" name="user_function" size="58">
					</td>
				</tr>
				<tr>
					<td style="text-align:right;"><font color="red" face="Verdana, Arial">*</font>Société :</td>
					<td>
					<input type="text" name="user_societe" size="58">
					</td>
				</tr>

				<br>
				<tr>
					<td style="text-align:right;"><font color="red" face="Verdana, Arial">*</font>Téléphone bureau :</td>
					<td>
						<input type="text" name="user_phone" size="58">
					</td>
				</tr>
				<tr>
					<td style="text-align:right;"><font color="red" face="Verdana, Arial"></font>Téléphone mobile :</td>
					<td>
						<input type="text" name="user_mobile" size="58">
					</td>
				</tr>
				<tr>
				<td style="text-align:right;"><font color="red" face="Verdana, Arial"></font>Fax:</td>
				<td>
					<input type="text" name="user_fax" size="58">
				</td>
				</tr>
				<tr>
					<td style="text-align:right;"><font color="red" face="Verdana, Arial">*</font>Adresse mail :</td>
					<td>
						<input type="text" name="user_email" size="58">
					</td>
				</tr>
				<tr>
					<td style="text-align:right;"><font color="red" face="Verdana, Arial">*</font>Adresse :</td>
					<td>
						<input type="text" name="user_address" size="58">
					</td>
				</tr>
				<tr>
					<td style="text-align:right;"><font color="red" face="Verdana, Arial">*</font>Code postal :</td>
					<td>
						<input type="text" name="user_zipCode" size="58">
					</td>
				</tr>
				<tr>
					<td style="text-align:right;"><font color="red" face="Verdana, Arial">*</font>Ville :</td>
					<td>
					<input type="text" name="user_city" size="58">
					</td>
				</tr>
				<tr>
					<td style="text-align:right;"><font color="red" face="Verdana, Arial"></font>Pays :</td>
					<td>
						<input type="text" name="user_country" size="58">
					</td>
				</tr>
				<tr>
					<td style="text-align:right;"><font color="red" face="Verdana, Arial"></font>Mot de Passe :</td>
					<td>
						<input type="text" name="user_mdp" size="58">
					</td>
				</tr>
				<tr>
					<td style="text-align:right;"><font color="red" face="Verdana, Arial"></font>Confirmation Mot de Passe :</td>
					<td>
						<input type="text" name="user_mdprep" size="58">
					</td>
				</tr>
				<tr>
					<td class="checker">
						<label>
							<input type="radio" name="user_statut" value="client">
							client
						</label>
						<br/>
						<label>
							<input type="radio" name="user_statut" value="commercial">
							commercial
						</label>
						<br/>
						<label>
							<input type="radio" name="user_statut" value="administrateur">
							administrateur
						</label>
						<br/>
						<label>
							<input type="radio" name="user_statut" value="super-administrateur">
							super-administrateur
						</label>
					</td>
				</tr>
			</table>
			<font color="red" face="Verdana, Arial">*</font><FONT color="red"> Champs obligatoires</FONT>
			<br>
			<center>
				<input id="submit" type="submit" value="inscription" name="valider">
			</center>
		</form>
		<br>
	</div>
</div>