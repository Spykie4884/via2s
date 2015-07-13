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
	<div  class="content_item">
		<h1><center>MODIFIEZ VOTRE COMPTE</center></h1>
		<div style="width: 90%; margin: 10px auto;">
			<form method="post" action="form_gestion_compte.php" name="monform">
				<div id="contact_form_gauche">
					<div class="contact_form_label_col">
						<span class="contact_form_label">Nom :</span>
						</br>
						<span class="contact_form_label"><span class="etoile">*</span>Fonction :</span>
						</br>
						<span class="contact_form_label"><span class="etoile">*</span>Société :</span>
						</br>
						<span class="contact_form_label"><span class="etoile">*</span>email :</span>
						</br>
						<span class="contact_form_label"><span class="etoile">*</span>N° tél. bureau:</span>
						</br>
						<span class="contact_form_label">N° tél.mobile:</span>
					</div>

					<div class="contact_form_input_col">
						<input class="contact_form_txtfield" type="text" name="fun" size="20"
							style="font:Arial, Helvetica, sans-serif"
							value="<?php if(isset($_SESSION['user_name'])) echo $_SESSION['user_name']; ?>" disabled>
							</br>
							</br>
						<input class="contact_form_txtfield" type="text" name="fun" size="20"
							style="font:Arial, Helvetica, sans-serif"
							value="<?php if(isset($_SESSION['user_function'])) echo $_SESSION['user_function']; ?>">
							</br>
							</br>
						<input class="contact_form_txtfield" type="text" name="Nouveausociete" size="20"
							style="font:Arial, Helvetica, sans-serif"
							value="<?php if(isset($_SESSION['user_societe'])) echo $_SESSION['user_societe']; ?>">
							</br>
							</br>
						<input class="contact_form_txtfield" type="text" name="Nouveaumail" size="20"
							value="<?php if(isset($_SESSION['user_email'])) echo $_SESSION['user_email']; ?>">
							</br>
							</br>
						<input class="contact_form_txtfield" type="text" name="Nouveautelephone" size="20"
							value="<?php if(isset($_SESSION['user_phone'])) echo $_SESSION['user_phone']; ?>">
							</br>
							</br>
						<input class="contact_form_txtfield" type="text" name="Nouveaumobile" size="20"
							value="<?php if(isset($_SESSION['user_mobile'])) echo $_SESSION['user_mobile']; ?>">
					</div>
				</div>

				<div id="contact_form_droite">
					<div class="contact_form_label_col">
						<span class="contact_form_label">Prénom :</span>
						</br>
						<span class="contact_form_label">N° Fax :</span>
						</br>
						<span class="contact_form_label">Adresse :</span>
						</br>
						<span class="contact_form_label">C.postal :</span>
						</br>
						<span class="contact_form_label">Ville :</span>
						</br>
						<span class="contact_form_label">Pays :</span>
					</div>

					<div class="contact_form_input_col">
						<input class="contact_form_txtfield" type="text" name="Nouveaufax" size="20"
							value="<?php if(isset($_SESSION['user_Fname'])) echo $_SESSION['user_Fname']; ?>" disabled>
						</br>
						</br>
						<input class="contact_form_txtfield" type="text" name="Nouveaufax" size="20"
							value="<?php if(isset($_SESSION['user_fax'])) echo $_SESSION['user_fax']; ?>">
						</br>
						</br>
						<input class="contact_form_txtfield" type="text" name="Nouveauadresse" size="20"
							value="<?php if(isset($_SESSION['user_address'])) echo $_SESSION['user_address']; ?>">
						</br>
						</br>
						<input class="contact_form_txtfield" type="text" name="Nouveaucodepostal" size="20"
							value="<?php if(isset($_SESSION['user_zipCode'])) echo $_SESSION['user_zipCode']; ?>">
						</br>
						</br>
						<input class="contact_form_txtfield" type="text" name="Nouveauville" size="20"
							value="<?php if(isset($_SESSION['user_city'])) echo $_SESSION['user_city']; ?>">
						</br>
						</br>
						<input class="contact_form_txtfield" type="text" name="Nouveaupays" size="20"
							value="<?php if(isset($_SESSION['user_country'])) echo $_SESSION['user_country']; ?>">
					</div>
				</div>
				<br/>
				<center>
					<span class="erreur">Attention, le changement de l'adresse e-mail modifiera également vos identifiants de connexion</span>
				</center>
				<br/>
				<br/>
				<p style="text-align: center;"><input id="Submit1" type="submit" value="Enregistrer" name="Enregistrer"></p>
			</div>
		</form>
	</div>
</div>