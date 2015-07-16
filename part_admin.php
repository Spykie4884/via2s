<?php
	$nombre_de_contact_en_attente = 0;
	$nombre_de_devis_en_attente = 0;
	$nombre_de_commande_en_attente = 0;
	
	$bdd = bdd_connexion();
	$req = $bdd->query('SELECT * FROM utilisateurs');
	//Compte le nombre de contact en attente
	while($row = $req->fetch()) {
		if($row['valide'] == 0)
			$nombre_de_contact_en_attente++;
	}
	$raq = $bdd->query('SELECT * FROM devis');
	//Compte le nombre de contact en attente
	while($raw = $raq->fetch()) {
		if($raw['statut'] == 'commande')
			$nombre_de_commande_en_attente++;
		else
			$nombre_de_devis_en_attente++;
	}
?>
<div id="menu_vertical">
	<ul>
		<?php
			include('vmenu_admin.php');
		?>
	</ul>
</div>
<div id="content">
	<div class="content_item">
		<br>
		<center>
			<h1> ADMINISTRATION DU SITE</h1>
			<br>
			<table>
				<tr>
					<th class="entete" colspan ="2">COMPTE</th>
				</tr>
				<tr>
					<td style="text-align:right">Contacts en attente : </td>
					<td>
						<font SIZE="4"> <?php echo $nombre_de_contact_en_attente; ?></font>
					</td>
				</tr>
				<tr>
					<td>
						<br/>
					</td>
				</tr>
				<tr>
					<th class="entete" colspan ="2">COMMANDE</th>
				</tr>
				<tr>
					<td style="text-align:right">Nombre de devis : </td>
					<td>
						<font SIZE="4"> <?php echo $nombre_de_devis_en_attente; ?></font>
					</td>
				</tr>
				<tr>
					<td>Nombre de commande : </td>
					<td>
						<font SIZE="4"> <?php echo $nombre_de_commande_en_attente; ?></font>
					</td>
				</tr>
			</table>
		</center>
	</div>
</div>